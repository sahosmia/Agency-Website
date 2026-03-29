<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AdminPagination;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\ServiceService;

class ServiceController extends Controller
{
    use FileUploadTrait, AdminPagination;

    protected $serviceService;

    public function __construct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }

    public function index(Request $request)
    {
        $adminPagination = $this->getAdminPagination();
        $categories = Category::all();
        $services = $this->serviceService->getServices($request->all(), $adminPagination);

        return view('admin.services.index', compact('services', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.services.create', compact('categories'));
    }

    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();
        $data['thumbnail'] = $this->uploadFile($request, 'thumbnail', 'services/thumbnails');
        $data['image'] = $this->uploadFile($request, 'image', 'services/images');
        $data['faqs'] = $request->faqs;

        $this->serviceService->storeService($data);
        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        $categories = Category::all();
        $service->load('faqs', 'serviceTypes.pricePlans');
        return view('admin.services.edit', compact('service', 'categories'));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $data['thumbnail'] = $this->updateFile($request, 'thumbnail', 'services/thumbnails', $service);
        $data['image'] = $this->updateFile($request, 'image', 'services/images', $service);
        $data['faqs'] = $request->faqs;

        $this->serviceService->updateService($service, $data);
        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            $this->deleteFile($service, 'image', 'services/images');
        }
        if ($service->thumbnail) {
            $this->deleteFile($service, 'thumbnail', 'services/thumbnails');
        }
        $this->serviceService->deleteService($service);
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
