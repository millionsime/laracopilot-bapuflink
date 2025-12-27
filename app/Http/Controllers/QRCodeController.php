<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QRCode;
use App\Models\Product;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use PDF;

class QRCodeController extends Controller
{
    public function index()
    {
        $qrCodes = QRCode::with('product')->latest()->paginate(10);
        return view('admin.qr-codes.index', compact('qrCodes'));
    }

    public function create()
    {
        $products = Product::all();
        return view('admin.qr-codes.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'batch_number' => 'required|string',
            'quantity' => 'required|integer|min:1',
        ]);

        $qrCodes = [];

        for ($i = 0; $i < $validated['quantity']; $i++) {
            $token = Str::random(32);

            $qrCode = QRCode::create([
                'product_id' => $validated['product_id'],
                'batch_number' => $validated['batch_number'],
                'token' => $token,
                'status' => 'unused',
            ]);

            $qrCodes[] = [
                'id' => $qrCode->id,
                'token' => $token,
                'batch_number' => $validated['batch_number'],
                'product_name' => $qrCode->product->name,
            ];
        }

        return redirect()->route('admin.qr-codes.index')->with('success', 'QR codes generated successfully.');
    }

    public function export($id)
    {
        $qrCode = QRCode::findOrFail($id);

        $qrCodeImage = QrCode::size(200)
            ->generate(route('verify', ['token' => $qrCode->token]));

        $pdf = PDF::loadView('admin.qr-codes.export', compact('qrCode', 'qrCodeImage'));

        return $pdf->download('qr-code-' . $qrCode->id . '.pdf');
    }
}