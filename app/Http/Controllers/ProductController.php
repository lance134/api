<?php

namespace App\Http\Controllers;

use App\Models\Product;
// use App\Http\Requests\StoreProductRequest;
// use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return $product;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'product_id' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required'
        ]);

        $product = Product::create($formFields);
        return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $formFields = $request->validate([
            'product_id' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required'
        ]);
        $product->update($formFields);
        return "AYAN NA UPDATE NA";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return "NA DELETE NA";
    }
}
