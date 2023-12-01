<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


 

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = Product::findOrFail($product->id);
        return view('product.single', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product = Product::findOrFail($product->id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product = Product::findOrFail($product->id);
        $product->update($request->all()); 
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product = Product::findOrFail($product->id);
        $product->delete(); // Corrected from $product->destroy();
        return redirect()->route('product.index');
    }

}
