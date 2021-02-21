<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.listAllBrands', compact('brands'));
    }

    public function create()
    {
        return view('brands.newBrand');
    }

    public function store(Request $request)
    {
        Brand::create($request->all());
        return redirect()->route('brand.index');

    }

    public function show(Brand $brand)
    {
        return view('brands.listBrand', compact('brand'));
    }

    public function edit(Brand $brand)
    {
        return view('brands.updateBrand', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        Brand::where('id', $brand->id)->update($request->except('_token', '_method'));
        return redirect()->route('brand.index');
    }

    public function destroy(Brand $brand)
    {
        if ($brand->services->count()){
            return back()->withErrors('Não foi possível excluir. Esta marca está associada a um serviço.');
        }else{
            if ($brand->products->count()){
                return back()->withErrors('Não foi possível excluir. Esta marca está associada a um serviço.');
            }
        }

        $brand->delete();
        return redirect()->route('brand.index');
    }
}
