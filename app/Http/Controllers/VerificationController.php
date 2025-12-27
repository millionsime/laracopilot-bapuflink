<?php

namespace App\Http\Controllers;

use App\Models\QRCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VerificationController extends Controller
{
    public function verify($token)
    {
        $qrCode = QRCode::where('token', $token)->first();

        if (!$qrCode) {
            return view('verification.invalid');
        }

        $batch = $qrCode->batch;
        $product = $batch->product;

        // Log the scan
        $scanData = [
            'qr_code_id' => $qrCode->id,
            'scan_time' => now(),
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ];

        DB::table('qr_code_scans')->insert($scanData);

        // Update QR code status and scan count
        $qrCode->scan_count += 1;

        if ($qrCode->status === 'unused') {
            $qrCode->status = 'verified';
            $qrCode->first_scan_time = now();
            $qrCode->first_scan_location = $this->getLocationFromIP(request()->ip());
        } elseif ($qrCode->status === 'verified') {
            $qrCode->status = 'suspicious';
        }

        $qrCode->save();

        return view('verification.result', compact('qrCode', 'batch', 'product'));
    }

    private function getLocationFromIP($ip)
    {
        // In a real application, you would use a geolocation service
        // This is a simplified example
        return 'Unknown Location';
    }
}