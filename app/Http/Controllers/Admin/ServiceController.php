<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function create()
    {
        return view('dashboard.create-service');
    }

    public function store(Request $request)
    {
        Service::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Service added!');
    }

    public function edit(Service $service)
    {
        return view('dashboard.edit-service', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $service->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Service updated!');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('dashboard')->with('success', 'Service deleted!');
    }
}
