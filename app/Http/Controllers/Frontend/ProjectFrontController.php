<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PageSetting;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectFrontController extends Controller
{
    public function index(Request $request)
    {
        $project_categories = ProjectCategory::get();

        $projects = Project::active()->with('category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%'.$request->search.'%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('project_category_id', $request->category);
            })
            ->paginate(6);

        $projectsPage = PageSetting::where('page_name', 'projects')->first();
        $projectsSettings = $projectsPage ? $projectsPage->settings : [];

        return view('frontend.projects.index', ['projects' => $projects, 'project_categories' => $project_categories, 'projectsSettings' => $projectsSettings]);
    }

    public function show(Project $project)
    {
        $project->load('category:id,title');
        $projects = Project::active()->with('category:id,title', 'clientReview')->limit(5)->get();
        $projectDetailPage = PageSetting::where('page_name', 'project-detail')->first();
        $projectDetailSettings = $projectDetailPage ? $projectDetailPage->settings : [];

        return view('frontend.projects.show', ['project' => $project, 'projects' => $projects, 'projectDetailSettings' => $projectDetailSettings]);
    }
}
