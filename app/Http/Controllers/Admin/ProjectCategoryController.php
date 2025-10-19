<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $projectCategories = ProjectCategory::all();
        return view('admin.project-categories.index', compact('projectCategories'));
    }

    public function create()
    {
        return view('admin.project-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:project_categories',
        ]);

        ProjectCategory::create($request->all());

        return redirect()->route('admin.project-categories.index')->with('success', 'Project category created successfully.');
    }

    public function edit(ProjectCategory $projectCategory)
    {
        return view('admin.project-categories.edit', compact('projectCategory'));
    }

    public function update(Request $request, ProjectCategory $projectCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:project_categories,slug,' . $projectCategory->id,
        ]);

        $projectCategory->update($request->all());

        return redirect()->route('admin.project-categories.index')->with('success', 'Project category updated successfully.');
    }

    public function destroy(ProjectCategory $projectCategory)
    {
        $projectCategory->delete();

        return redirect()->route('admin.project-categories.index')->with('success', 'Project category deleted successfully.');
    }
}
