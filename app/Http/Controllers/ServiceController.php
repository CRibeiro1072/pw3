<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Expert;
use App\Models\Brand;
use App\Models\Device;
use App\Models\Product;
use App\Models\Service;
use App\Models\Situation;
use App\Models\Template;
use App\Models\ItemService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('customer', 'expert', 'brand', 'template', 'device')->get();
        return view('services.listAllServices', compact('services'));
    }

    public function create()
    {
        $customers = Customer::all();
        $experts = Expert::all();
        $brands = Brand::all();
        $devices = Device::all();
        $templates = Template::all();
        return view('services.newService', [
            'customers' => $customers,
            'experts' => $experts,
            'brands' => $brands,
            'devices' => $devices,
            'templates' => $templates,
        ]);
    }

    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect()->route('service.index');
    }

    public function show(Service $service)
    {
        $products = Product::all();
        $situations = Situation::all();
        return view('services.listService', compact('service', 'products', 'situations'));
    }

    public function edit(Service $service)
    {
        $customers = Customer::all();
        $experts = Expert::all();
        $brands = Brand::all();
        $devices = Device::all();
        $templates = Template::all();
        $itemServices = ItemService::all();
        return view('services.updateService', [
            'service' => $service,
            'customers' => $customers,
            'experts' => $experts,
            'brands' => $brands,
            'devices' => $devices,
            'templates' => $templates,
            'itemServices' => $itemServices,
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
        //return redirect()->route('service.index');
    }
}
