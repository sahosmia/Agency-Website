<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectCategoryRequest;
use App\Http\Requests\UpdateProjectCategoryRequest;
use App\Models\ProjectCategory;

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

    public function store(StoreProjectCategoryRequest $request)
    {
        ProjectCategory::create($request->validated());
        return redirect()->route('admin.project-categories.index')->with('success', 'Project category created successfully.');
    }

    public function edit(ProjectCategory $projectCategory)
    {
        return view('admin.project-categories.edit', compact('projectCategory'));
    }

    public function update(UpdateProjectCategoryRequest $request, ProjectCategory $projectCategory)
    {
        $projectCategory->update($request->validated());
        return redirect()->route('admin.project-categories.index')->with('success', 'Project category updated successfully.');
    }

    public function destroy(ProjectCategory $projectCategory)
    {
        $projectCategory->delete();
        return redirect()->route('admin.project-categories.index')->with('success', 'Project category deleted successfully.');
    }
}
