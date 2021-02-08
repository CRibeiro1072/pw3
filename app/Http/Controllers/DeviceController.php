<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
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

    public function update(Request $request, Device $device)
    {
        Device::where('id', $device->id)->update($request->except('_token', '_method'));
        return redirect()->route('device.index');
    }

    public function destroy(Device $device)
    {
        $device->delete();
        return redirect()->route('device.index');
    }
}
