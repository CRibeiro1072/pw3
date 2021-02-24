<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
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
use Illuminate\Support\Facades\Mail;

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

    public function store(StoreServiceRequest $request)
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
        return view('services.updateService', [
            'service' => $service,
            'customers' => $customers,
            'experts' => $experts,
            'brands' => $brands,
            'devices' => $devices,
            'templates' => $templates,
        ]);
    }

    public function update(StoreServiceRequest $request, Service $service)
    {
        Service::where('id', $service->id)->update($request->except('_token', '_method'));
        return redirect()->route('service.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        //return redirect()->route('service.index');
    }

    public function enviarEmailSolicitarAprovacao($serviceid){
        $service = Service::findOrFail($serviceid);
        //dd($service);
        //return view('emails.approval', compact('service'));
        Mail::send('emails.approval', ['service' => $service], function ($m) use ($service) {
            $m->from('contato@osinterativa.com.br', 'OS Interativa');

            $m->to($service->customer->email, $service->customer->fullName)->subject('Aprovação de Orçamento!');
        });
        return redirect()->route('service.show', $service);
    }

    public function approvalService($serviceid){
        $service = Service::findOrFail($serviceid);
        Service::where('id', $service->id)->update(['approval'=> true]);
        return view('services.approvalService');
    }

    public function enviarEmailComunicarFinalizacao($serviceid){
        $service = Service::findOrFail($serviceid);
        Service::where('id', $service->id)->update(['finished'=> true]);
        //dd($service);
        //return view('emails.approval', compact('service'));
        Mail::send('emails.finished', ['service' => $service], function ($m) use ($service) {
            $m->from('contato@osinterativa.com.br', 'OS Interativa');

            $m->to($service->customer->email, $service->customer->fullName)->subject('Serviço finalizado');
        });
        return redirect()->route('service.show', $service);
    }

    public function cancelFinished($id){
        Service::where('id', $id)->update(['finished'=> false]);
    }

    public function cancelApproval($id){
        Service::where('id', $id)->update(['approval'=> false]);
    }
}
