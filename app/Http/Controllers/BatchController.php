<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Product;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::with('product')->get();
        return view('admin.batches.index', compact('batches'));
    }

    public function create()
    {
        $products = Product::all();
        return view('admin.batches.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'batch_number' => 'required|string|max:255',
            'manufacturing_date' => 'required|date',
            'expiry_date' => 'required|date',
            'quantity' => 'required|integer',
        ]);

        Batch::create($validatedData);

        return redirect()->route('admin.batches.index')->with('success', 'Batch created successfully.');
    }

    public function edit(Batch $batch)
    {
        $products = Product::all();
        return view('admin.batches.edit', compact('batch', 'products'));
    }

    public function update(Request $request, Batch $batch)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'batch_number' => 'required|string|max:255',
            'manufacturing_date' => 'required|date',
            'expiry_date' => 'required|date',
            'quantity' => 'required|integer',
        ]);

        $batch->update($validatedData);

        return redirect()->route('admin.batches.index')->with('success', 'Batch updated successfully.');
    }

    public function destroy(Batch $batch)
    {
        $batch->delete();

        return redirect()->route('admin.batches.index')->with('success', 'Batch deleted successfully.');
    }
}