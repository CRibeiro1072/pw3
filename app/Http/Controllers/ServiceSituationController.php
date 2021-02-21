<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceSituation;
use Illuminate\Http\Request;

class ServiceSituationController extends Controller
{
    //
    public function store(Request $request){
        ServiceSituation::create($request->all());
        return redirect()->route('service.show', Service::findOrFail($request->input('service_id')));
    }

    public function destroy($serviceid, $situationid){
        $service = Service::findOrFail($serviceid);
        $service->situations()->detach($situationid);
        return redirect()->route('service.show', Service::findOrFail($service->id));
    }
}
