<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSoftwareCategoryRequest;
use App\Http\Requests\UpdateSoftwareCategoryRequest;
use App\Models\SoftwareCategory;

class SoftwareCategoryController extends Controller
{
    public function index()
    {
        $softwareCategories = SoftwareCategory::all();
        return view('admin.software-categories.index', compact('softwareCategories'));
    }

    public function create()
    {
        return view('admin.software-categories.create');
    }

    public function store(StoreSoftwareCategoryRequest $request)
    {
        SoftwareCategory::create($request->validated());
        return redirect()->route('admin.software-categories.index')->with('success', 'Software category created successfully.');
    }

    public function edit(SoftwareCategory $softwareCategory)
    {
        return view('admin.software-categories.edit', compact('softwareCategory'));
    }

    public function update(UpdateSoftwareCategoryRequest $request, SoftwareCategory $softwareCategory)
    {
        $softwareCategory->update($request->validated());
        return redirect()->route('admin.software-categories.index')->with('success', 'Software category updated successfully.');
    }

    public function destroy(SoftwareCategory $softwareCategory)
    {
        $softwareCategory->delete();
        return redirect()->route('admin.software-categories.index')->with('success', 'Software category deleted successfully.');
    }
}
