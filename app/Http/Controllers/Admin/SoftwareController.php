<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AdminPagination;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreSoftwareRequest;
use App\Http\Requests\UpdateSoftwareRequest;
use App\Models\Software;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\SoftwareService;
use Illuminate\Support\Facades\Storage;

class SoftwareController extends Controller
{
    use FileUploadTrait, AdminPagination;

    protected $softwareService;

    public function __construct(SoftwareService $softwareService)
    {
        $this->softwareService = $softwareService;
    }

    public function index(Request $request)
    {
        $adminPagination = $this->getAdminPagination();
        $categories = Category::all();
        $softwares = $this->softwareService->getSoftwares($request->all(), $adminPagination);

        return view('admin.softwares.index', compact('softwares', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.softwares.create', compact('categories'));
    }

    public function store(StoreSoftwareRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->uploadFile($request, 'image', 'softwares');
        $data['faqs'] = $request->faqs;

        $this->softwareService->storeSoftware($data);
        return redirect()->route('admin.softwares.index')->with('success', 'Software created successfully.');
    }

    public function show(Software $software)
    {
        return view('admin.softwares.show', compact('software'));
    }

    public function edit(Software $software)
    {
        $categories = Category::all();
        $software->load('faqs');
        return view('admin.softwares.edit', compact('software', 'categories'));
    }

    public function update(UpdateSoftwareRequest $request, Software $software)
    {
        $data = $request->validated();
        $data['image'] = $this->updateFile($request, 'image', 'softwares', $software);
        $data['faqs'] = $request->faqs;

        $this->softwareService->updateSoftware($software, $data);
        return redirect()->route('admin.softwares.index')->with('success', 'Software updated successfully.');
    }

    public function destroy(Software $software)
    {
        if ($software->image) {
            Storage::disk('public')->delete($software->image);
        }
        $this->softwareService->deleteSoftware($software);
        return redirect()->route('admin.softwares.index')->with('success', 'Software deleted successfully.');
    }
}
