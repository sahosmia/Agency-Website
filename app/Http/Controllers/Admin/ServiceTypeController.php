<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    public function index(Request $request)
    {
        $query = ServiceType::with('service');

        if ($request->filled('q')) {
            $query->where('name', 'like', '%' . $request->q . '%');
        }

        $serviceTypes = $query->latest()->paginate(10);
        return view('admin.service-types.index', compact('serviceTypes'));
    }

    public function create()
    {
        $services = Service::all();
        return view('admin.service-types.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'service_id' => 'required|exists:services,id',
        ]);

        ServiceType::create($request->all());

        return redirect()->route('admin.service-types.index')->with('success', 'Service Type created successfully.');
    }

    public function edit(ServiceType $serviceType)
    {
        $services = Service::all();
        return view('admin.service-types.edit', compact('serviceType', 'services'));
    }

    public function update(Request $request, ServiceType $serviceType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'service_id' => 'required|exists:services,id',
        ]);

        $serviceType->update($request->all());

        return redirect()->route('admin.service-types.index')->with('success', 'Service Type updated successfully.');
    }

    public function destroy(ServiceType $serviceType)
    {
        $serviceType->delete();
        return redirect()->route('admin.service-types.index')->with('success', 'Service Type deleted successfully.');
    }
}
