<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::with('brand')->get();
//        $products = product::all();
        return view('products.listAllProducts', compact('products'));
    }

    public function create()
    {
        $brands = Brand::all();
        return view('products.newProduct', [
            'brands' => $brands,
        ]);
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('product.index');
    }

    public function show(product $product)
    {
        return view('products.listProduct', compact('product'));
    }

    public function edit(product $product)
    {
        $brands = Brand::all();
        return view('products.updateProduct', [
            'brands' => $brands,
            'product' => $product,
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

    public function productjson($id){
        $product = Product::findOrFail($id);
        return response()->json($product);
    }
}
