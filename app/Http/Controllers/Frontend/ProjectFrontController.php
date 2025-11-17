<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PageSetting;
use App\Models\Project;
use App\Models\Category;
use App\Models\Faq;
use Illuminate\Http\Request;

class ProjectFrontController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();

        $projects = Project::active()->with('category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%'.$request->search.'%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('category_id', $request->category);
            })
            ->orderBy('sort')
            ->paginate(6);

        $faqs = Faq::where('page', 'service')->orderBy('sort')->get();
        $projectsPage = PageSetting::where('page_name', 'projects')->first();

        $projectsSettings = $projectsPage ? $projectsPage->settings : [];

        return view('frontend.projects.index', compact('projects', 'categories', 'projectsSettings', 'faqs'));
    }

    public function show(Project $project)
    {
        $project->load('category:id,title');
        $projects = Project::active()->with('category:id,title', 'clientReview')->orderBy('sort')->limit(5)->get();
        $projectDetailPage = PageSetting::where('page_name', 'project-detail')->first();
        $projectDetailSettings = $projectDetailPage ? $projectDetailPage->settings : [];

        return view('frontend.projects.show', ['project' => $project, 'projects' => $projects, 'projectDetailSettings' => $projectDetailSettings]);
    }
}
