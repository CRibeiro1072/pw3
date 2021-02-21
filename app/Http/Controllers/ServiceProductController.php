<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceProduct;
use Illuminate\Http\Request;

class ServiceProductController extends Controller
{
    //
    public function store(Request $request){
        ServiceProduct::create($request->all());
        return redirect()->route('service.show', Service::findOrFail($request->input('service_id')));
    }

    public function destroy($serviceid, $productid){
        $service = Service::findOrFail($serviceid);
        $service->products()->detach($productid);
        return redirect()->route('service.show', Service::findOrFail($service->id));
    }
}
