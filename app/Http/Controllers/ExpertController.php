<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpertRequest;
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

    public function store(StoreExpertRequest $request)
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
        if ($expert->services->count()){
            return back()->withErrors('Não foi possível excluir. Existe um serviço associado a esse técnico.');
        }
        $expert->delete();
        return redirect()->route('expert.index');
    }
}
