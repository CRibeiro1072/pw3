<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSituationRequest;
use App\Models\Situation;
use Illuminate\Http\Request;

class SituationController extends Controller
{
    public function index()
    {
        $situations = Situation::all();
        return view('situations.listAllSituations', compact('situations'));
    }

    public function create()
    {
        return view('situations.newSituation');
    }

    public function store(StoreSituationRequest $request)
    {
        Situation::create($request->all());
        return redirect()->route('situation.index');
    }

    public function show(Situation $situation)
    {
        return view('situations.listSituation', compact('situation'));
    }

    public function edit(Situation $situation)
    {
        return view('situations.updateSituation', compact('situation'));
    }

    public function update(StoreSituationRequest $request, Situation $situation)
    {
        Situation::where('id', $situation->id)->update($request->except('_token', '_method'));
        return redirect()->route('situation.index');
    }

    public function destroy(Situation $situation)
    {
        if ($situation->services->count()){
            return back()->withErrors('Não foi possível excluir. Esta situação está associada a um serviço.');
        }
        $situation->delete();
        return redirect()->route('situation.index');
    }
}
