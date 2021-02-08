<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index()
    {
        $experts = Expert::all();
        return view('experts.listAllExperts', compact('experts'));
    }

    public function create()
    {
        return view('experts.newExpert');
    }

    public function store(Request $request)
    {
        Expert::create($request->all());
        return redirect()->route('expert.index');
    }

    public function show(Expert $expert)
    {
        return view('experts.listExpert', compact('expert'));
    }

    public function edit(Expert $expert)
    {
        return view('experts.updateExpert', compact('expert'));
    }

    public function update(Request $request, Expert $expert)
    {
        Expert::where('id', $expert->id)->update($request->except('_token', '_method'));
        return redirect()->route('expert.index');
    }

    public function destroy(Expert $expert)
    {
        $expert->delete();
        return redirect()->route('expert.index');
    }
}
