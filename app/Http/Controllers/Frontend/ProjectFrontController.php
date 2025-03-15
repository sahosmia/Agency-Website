<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectImage;
use App\Models\ProjectPage;
use App\Models\ProjectPageImage;
use App\Models\ProjectPageImageType;
use App\Models\ProjectPageType;
use App\Models\ProjectType;
use Illuminate\Http\Request;

class ProjectFrontController extends Controller
{
    public function index(Request $request)
    {
        $project_categories = ProjectCategory::get();

        $projects = Project::with('category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('project_category_id', $request->category);
            })
            ->paginate(6);
        return view('frontend.projects.index', ['projects' => $projects, 'project_categories' => $project_categories]);
    }
    public function show(Project $project)
    {
        $project->load('category:id,title');
        $projects = Project::with('category:id,title', 'clientReview')->limit(5)->get();
        return view('frontend.projects.show', ['project' => $project, 'projects' => $projects]);
    }
}
