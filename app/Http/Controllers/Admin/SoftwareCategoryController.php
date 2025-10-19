<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SoftwareCategory;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:software_categories',
        ]);

        SoftwareCategory::create($request->all());

        return redirect()->route('admin.software-categories.index')->with('success', 'Software category created successfully.');
    }

    public function edit(SoftwareCategory $softwareCategory)
    {
        return view('admin.software-categories.edit', compact('softwareCategory'));
    }

    public function update(Request $request, SoftwareCategory $softwareCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:software_categories,slug,' . $softwareCategory->id,
        ]);

        $softwareCategory->update($request->all());

        return redirect()->route('admin.software-categories.index')->with('success', 'Software category updated successfully.');
    }

    public function destroy(SoftwareCategory $softwareCategory)
    {
        $softwareCategory->delete();

        return redirect()->route('admin.software-categories.index')->with('success', 'Software category deleted successfully.');
    }
}
