<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ClientReview;
use App\Models\Project;
use App\Models\Service;
use App\Models\Software;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with('article_category:id,title')->latest()->limit(8)->get();
        $projects = Project::with('category:id,title')->latest()->limit(8)->get();
        $softwares = Software::with('software_category:id,title')->latest()->limit(8)->get();
        $services = Service::with('service_category:id,title')->latest()->limit(8)->get();
        $client_reviews = ClientReview::latest()->limit(8)->get();

        return view('frontend.home', [
            'projects' => $projects,
            'softwares' => $softwares,
            'services' => $services,
            'articles' => $articles,
            'client_reviews' => $client_reviews,
        ]);
    }
}
