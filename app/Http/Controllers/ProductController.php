<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('product.index', [
            'products' => $products
        ]);
    }

    public function create() {
        return view('product.create');
    }

    public function show(int $id) {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('home')->with('error', 'Product not found');
        }

        return view('product.show', [
            'product' => $product
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        Product::create($validated);

        return redirect()->route('home')->with('success', 'Product created successfully');
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->update($request->all());
    
        return redirect()->route('home'); // or wherever you want to redirect after updating the product
    }
    
}
