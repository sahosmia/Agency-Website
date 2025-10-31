<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreSoftwareRequest;
use App\Http\Requests\UpdateSoftwareRequest;
use App\Models\Software;
use App\Models\SoftwareCategory;
use Illuminate\Support\Facades\Storage;

class SoftwareController extends Controller
{
     use FileUploadTrait;
    public function index()
    {
        $softwares = Software::with('category')->get();
        return view('admin.softwares.index', compact('softwares'));
    }

    public function create()
    {
        $categories = SoftwareCategory::all();
        return view('admin.softwares.create', compact('categories'));
    }

    public function store(StoreSoftwareRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->uploadFile($request, 'image', 'softwares');
        Software::create($data);
        return redirect()->route('admin.softwares.index')->with('success', 'Software created successfully.');
    }

    public function show(Software $software)
    {
        return view('admin.softwares.show', compact('software'));
    }

    public function edit(Software $software)
    {
        $categories = SoftwareCategory::all();
        return view('admin.softwares.edit', compact('software', 'categories'));
    }

    public function update(UpdateSoftwareRequest $request, Software $software)
    {
        $data = $request->validated();
        $data['image'] = $this->updateFile($request, 'image', 'softwares', $software);
        $software->update($data);
        return redirect()->route('admin.softwares.index')->with('success', 'Software updated successfully.');
    }

    public function destroy(Software $software)
    {
        if ($software->image) {
            Storage::disk('public')->delete($software->image);
        }
        $software->delete();
        return redirect()->route('admin.softwares.index')->with('success', 'Software deleted successfully.');
    }
}
