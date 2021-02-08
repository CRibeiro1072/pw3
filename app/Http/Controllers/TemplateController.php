<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Template::all();
        return view('templates.listAllTemplates', compact('templates'));
    }

    public function create()
    {
        return view('templates.newTemplate');
    }

    public function store(Request $request)
    {
        Template::create($request->all());
        return redirect()->route('template.index');
    }

    public function show(Template $template)
    {
        return view('templates.listTemplate', compact('template'));
    }

    public function edit(Template $template)
    {
        return view('templates.updateTemplate', compact('template'));
    }

    public function update(Request $request, Template $template)
    {
        Template::where('id', $template->id)->update($request->except('_token', '_method'));
        return redirect()->route('template.index');
    }

    public function destroy(Template $template)
    {
        $template->delete();
        return redirect()->route('template.index');
    }
}
