<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('products.listAllProducts', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.newProduct');
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('product.index');
    }

    public function show(product $product)
    {
        return view('products.listProduct', [
            'product' => $product
        ]);
    }

    public function edit(product $product)
    {
        return view('products.updateProduct', [
            'product' => $product
        ]);
    }

    public function update(Request $request, product $product)
    {
        Product::where('id', $product->id)->update($request->except('_token', '_method'));
        return redirect()->route('product.index');
    }

    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
