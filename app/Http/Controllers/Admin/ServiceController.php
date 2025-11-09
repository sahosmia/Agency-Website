<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AdminPagination;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    use FileUploadTrait, AdminPagination;
    public function index(Request $request)
    {
        $adminPagination = $this->getAdminPagination();

        $categories = ServiceCategory::all();
        $query = Service::with('service_category');

        if ($request->filled('q')) {
            $query->where('name', 'like', '%' . $request->q . '%');
        }

        if ($request->filled('category_id')) {
            $query->where('service_category_id', $request->category_id);
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $services = $query->latest()->paginate($adminPagination);
        return view('admin.services.index', compact('services', 'categories'));
    }

    public function create()
    {
        $categories = ServiceCategory::all();
        return view('admin.services.create', compact('categories'));
    }

    public function store(StoreServiceRequest $request)
    {
        DB::transaction(function () use ($request) {
            $data = $request->validated();
            $data['thumbnail'] = $this->uploadFile($request, 'thumbnail', 'services');

            $service = Service::create($data);

            if ($request->has('faqs')) {
                $service->faqs()->createMany($request->faqs);
            }
        });

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
        DB::transaction(function () use ($request, $service) {
            $data = $request->validated();
            $data['thumbnail'] = $this->updateFile($request, 'thumbnail', 'services', $service);
            $service->update($data);

            if ($request->has('faqs')) {
                $service->faqs()->delete();
                $service->faqs()->createMany($request->faqs);
            }
        });

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
