<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\QRCode;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;

class QRCodeController extends Controller
{
    public function index()
    {
        $batches = Batch::all();
        return view('admin.qrcodes.index', compact('batches'));
    }

    public function create()
    {
        $batches = Batch::all();
        return view('admin.qrcodes.create', compact('batches'));
    }

    public function generate(Request $request)
    {
        $validatedData = $request->validate([
            'batch_id' => 'required|exists:batches,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $batch = Batch::findOrFail($validatedData['batch_id']);
        $quantity = $validatedData['quantity'];

        for ($i = 0; $i < $quantity; $i++) {
            $token = Str::random(32);
            $qrCode = new QRCode();
            $qrCode->batch_id = $batch->id;
            $qrCode->token = $token;
            $qrCode->status = 'unused';
            $qrCode->save();

            // Generate QR code image
            $qrCodeImage = QrCode::size(200)
                ->generate(route('verify', ['token' => $token]));

            // Save QR code image to storage
            $path = 'qrcodes/' . $token . '.svg';
            file_put_contents(storage_path('app/public/' . $path), $qrCodeImage);
        }

        return redirect()->route('admin.qrcodes.index')->with('success', 'QR codes generated successfully.');
    }

    public function export(Batch $batch)
    {
        $qrcodes = $batch->qrcodes;

        $csvData = "Token,Status,Scan Count,First Scan Time,First Scan Location\n";
        foreach ($qrcodes as $qrCode) {
            $csvData .= $qrCode->token . "," . $qrCode->status . "," . $qrCode->scan_count . "," . $qrCode->first_scan_time . "," . $qrCode->first_scan_location . "\n";
        }

        $filename = 'qrcodes_' . $batch->batch_number . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        return response()->make($csvData, 200, $headers);
    }

    public function print(Batch $batch)
    {
        $qrcodes = $batch->qrcodes;

        return view('admin.qrcodes.print', compact('batch', 'qrcodes'));
    }
}