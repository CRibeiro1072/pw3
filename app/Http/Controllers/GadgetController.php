<?php

namespace App\Http\Controllers;

use App\Models\Gadget;
use Illuminate\Http\Request;

class GadgetController extends Controller
{
    public function index()
    {
        $gadgets = Gadget::all();
        return view('gadgets.listAllGadgets', [
            'gadgets' => $gadgets
        ]);
    }

    public function create()
    {
        return view('gadgets.newGadget');
    }

    public function store(Request $request)
    {
        Gadget::create($request->all());
        return redirect()->route('gadget.index');
    }

    public function show(Gadget $gadget)
    {
        return view('gadgets.listGadget', [
            'gadget' => $gadget
        ]);
    }

    public function edit(Gadget $gadget)
    {
        return view('gadgets.updateGadget', [
            'gadget' => $gadget
        ]);
    }

    public function update(Request $request, Gadget $gadget)
    {
        Gadget::where('id', $gadget->id)->update($request->except('_token', '_method'));
        return redirect()->route('gadget.index');
    }

    public function destroy(Gadget $gadget)
    {
        $gadget->delete();
        return redirect()->route('gadget.index');
    }
}
