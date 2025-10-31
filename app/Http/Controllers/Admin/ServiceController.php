<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    use FileUploadTrait;
    public function index()
    {
        $services = Service::with('service_category')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        $categories = ServiceCategory::all();
        return view('admin.services.create', compact('categories'));
    }

    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();
        $data['thumbnail'] = $this->uploadFile($request, 'thumbnail', 'services');

        Service::create($data);
        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        $categories = ServiceCategory::all();
        $service->load('serviceTypes.pricePlans');
        return view('admin.services.edit', compact('service', 'categories'));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $data['thumbnail'] = $this->updateFile($request, 'thumbnail', 'services', $service);
        $service->update($data);
        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
