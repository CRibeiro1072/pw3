<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Expert;
use App\Models\Gadget;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('customer', 'expert', 'gadget')->get();
        return view('services.listAllServices', [
            'services' => $services
        ]);
    }

    public function create()
    {
        $customers = Customer::all();
        $gadgets = Gadget::all();
        $experts = Expert::all();
        return view('services.newService', [
            'customers' => $customers,
            'gadgets' => $gadgets,
            'experts' => $experts
        ]);
    }

    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect()->route('service.index');
    }

    public function show(Service $service)
    {
        return view('services.listService', [
            'service' => $service
        ]);

    }

    public function edit(Service $service)
    {
        $customers = Customer::all();
        $gadgets = Gadget::all();
        $experts = Expert::all();
        return view('services.updateService', [
            'service' => $service,
            'customers' => $customers,
            'gadgets' => $gadgets,
            'experts' => $experts
        ]);
    }

    public function update(Request $request, Service $service)
    {
        Service::where('id', $service->id)->update($request->except('_token', '_method'));
        return redirect()->route('service.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index');
    }
}
