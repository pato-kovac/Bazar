<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_category' => 'required|string|max:50',
            'product_name' => 'required|string|max:50',
            'product_images.*' => 'required|image|max:2048',
            'product_description' => 'required|string|max:1500',
            'product_price' => 'required|string|max:10',
            'publisher_id' => 'required|integer',
        ]);

        $imagePaths = [];

        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $image) {
                $imagePaths[] = $image->store('products', 'public');
            }
        }

        Product::create([
            'product_category' => $request->product_category,
            'product_name' => $request->product_name,
            'product_images' => json_encode($imagePaths),
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
            'publisher_id' => $request->publisher_id,
            'created_at' => now()
        ]);

        return redirect('/')->with('success', 'Produkt bol úspešne pridaný!');
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
}
