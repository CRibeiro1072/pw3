<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeviceRequest;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return view('devices.listAllDevices', compact('devices'));
    }

    public function create()
    {
        return view('devices.newDevice');
    }

    public function store(StoreDeviceRequest $request)
    {
        Device::create($request->all());
        return redirect()->route('device.index');
    }

    public function show(Device $device)
    {
        return view('devices.listDevice', compact('device'));
    }

    public function edit(Device $device)
    {
        return view('devices.updateDevice', compact('device'));
    }

    public function update(StoreDeviceRequest $request, Device $device)
    {
        Device::where('id', $device->id)->update($request->except('_token', '_method'));
        return redirect()->route('device.index');
    }

    public function destroy(Device $device)
    {
        if ($device->services->count()){
            return back()->withErrors('Não foi possível excluir. Este aparelho está associado a um serviço.');
        }
        $device->delete();
        return redirect()->route('device.index');
    }
}
