<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ClientReview;
use App\Models\Faq;
use App\Models\PageSetting;
use App\Models\Project;
use App\Models\Service;
use App\Models\Software;
use App\Models\BusinessTag;
use App\Models\TrustedPartner;
use App\Models\Value;
use App\Models\WorkingProcess;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::with('article_category:id,title')->latest()->limit(8)->get();
        $projects = Project::with('project_category:id,title')->orderBy('sort')->limit(8)->get();
        $softwares = Software::with('software_category:id,title')->latest()->limit(8)->get();
        $services = Service::with('service_category:id,title')->latest()->limit(8)->get();
        $client_reviews = ClientReview::active()->orderBy('sort')->limit(8)->get();
        $values = Value::latest()->limit(4)->get();
        $working_processes = WorkingProcess::latest()->limit(4)->get();
        $faqs = Faq::orderBy('sort')->get();
        $trusted_partners = TrustedPartner::latest()->limit(4)->get();
        $business_tags = BusinessTag::latest()->get();

        $homePage = PageSetting::where('page_name', 'home')->first();
        $homeSettings = $homePage ? $homePage->settings : [];
        $contactPage = PageSetting::where('page_name', 'contact')->first();
        $contactSettings = $contactPage ? $contactPage->settings : [];

        return view('frontend.home', [
            'projects' => $projects,
            'softwares' => $softwares,
            'services' => $services,
            'articles' => $articles,
            'client_reviews' => $client_reviews,
            'homeSettings' => $homeSettings,
            'values' => $values,
            'working_processes' => $working_processes,
            'faqs' => $faqs,
            'contactSettings' => $contactSettings,
            'trusted_partners' => $trusted_partners,
            'business_tags' => $business_tags,
        ]);
    }
}
