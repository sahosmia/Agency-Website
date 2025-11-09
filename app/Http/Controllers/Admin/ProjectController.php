<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\Category;
use App\Http\Controllers\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    use FileUploadTrait;

    public function index(Request $request)
    {
        $categories = Category::all();
        $query = Project::with('category');

        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->q . '%');
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $projects = $query->latest()->paginate(10);
        return view('admin.projects.index', compact('projects', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.projects.create', compact('categories'));
    }

    public function store(StoreProjectRequest $request)
    {
        DB::transaction(function () use ($request) {
            $data = $request->validated();
            $data['thumbnail'] = $this->uploadFile($request, 'thumbnail', 'projects');
            $project = Project::create($data);

            if ($request->has('faqs')) {
                $project->faqs()->createMany($request->faqs);
            }
        });

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('admin.projects.edit', compact('project', 'categories'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        DB::transaction(function () use ($request, $project) {
            $data = $request->validated();
            $data['thumbnail'] = $this->updateFile($request, 'thumbnail', 'projects', $project);
            $project->update($data);

            if ($request->has('faqs')) {
                $project->faqs()->delete();
                $project->faqs()->createMany($request->faqs);
            }
        });

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $this->deleteFile($project, 'thumbnail');
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
