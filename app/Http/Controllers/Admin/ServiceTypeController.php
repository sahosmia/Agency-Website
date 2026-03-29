<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceTypeRequest;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Services\ServiceTypeService;

class ServiceTypeController extends Controller
{
    protected $serviceTypeService;

    public function __construct(ServiceTypeService $serviceTypeService)
    {
        $this->serviceTypeService = $serviceTypeService;
    }

    public function index(Request $request)
    {
        $serviceTypes = $this->serviceTypeService->getServiceTypes($request->all(), 10);
        return view('admin.service-types.index', compact('serviceTypes'));
    }

    public function create()
    {
        $services = Service::all();
        return view('admin.service-types.create', compact('services'));
    }

    public function store(ServiceTypeRequest $request)
    {
        $this->serviceTypeService->storeServiceType($request->validated());

        return redirect()->route('admin.service-types.index')->with('success', 'Service Type created successfully.');
    }

    public function edit(ServiceType $serviceType)
    {
        $services = Service::all();
        return view('admin.service-types.edit', compact('serviceType', 'services'));
    }

    public function update(ServiceTypeRequest $request, ServiceType $serviceType)
    {
        $this->serviceTypeService->updateServiceType($serviceType, $request->validated());

        return redirect()->route('admin.service-types.index')->with('success', 'Service Type updated successfully.');
    }

    public function destroy(ServiceType $serviceType)
    {
        $this->serviceTypeService->deleteServiceType($serviceType);
        return redirect()->route('admin.service-types.index')->with('success', 'Service Type deleted successfully.');
    }
}
