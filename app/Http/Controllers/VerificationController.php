<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QRCode;
use App\Models\QRScan;
use Stevebauman\Location\Facades\Location;

class VerificationController extends Controller
{
    public function verify($token)
    {
        $qrCode = QRCode::where('token', $token)->first();

        if (!$qrCode) {
            return view('verification.invalid');
        }

        $ip = request()->ip();
        $location = Location::get($ip);

        $scan = QRScan::create([
            'qr_code_id' => $qrCode->id,
            'batch_number' => $qrCode->batch_number,
            'ip_address' => $ip,
            'location' => $location ? $location->cityName . ', ' . $location->countryName : 'Unknown',
            'is_suspicious' => QRScan::where('qr_code_id', $qrCode->id)->count() > 0,
        ]);

        $qrCode->status = $scan->is_suspicious ? 'suspicious' : 'verified';
        $qrCode->save();

        return view('verification.result', compact('qrCode', 'scan'));
    }
}