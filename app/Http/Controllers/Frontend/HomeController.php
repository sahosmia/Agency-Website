<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
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
        $homePage = PageSetting::where('page_name', 'home')->first();
        $homeSettings = $homePage ? $homePage->settings : [];
        $itemLimit = $homeSettings['item_limit'] ?? 8;

        $articles = Article::with('category:id,title')->latest()->limit($itemLimit)->get();
        $projects = Project::with('category:id,title')->orderBy('sort')->limit($itemLimit)->get();
        $softwares = Software::with('category:id,title')->latest()->limit($itemLimit)->get();
        $services = Service::with('category:id,title')->latest()->limit($itemLimit)->get();
        $client_reviews = ClientReview::active()->orderBy('sort')->limit($itemLimit)->get();
        $values = Value::latest()->limit(4)->get();
        $working_processes = WorkingProcess::latest()->limit(4)->get();
        $faqs = Faq::where('page', 'home')->orderBy('sort')->get();
        $trusted_partners = TrustedPartner::latest()->limit(4)->get();
        $business_tags = BusinessTag::latest()->get();

        $contactPage = PageSetting::where('page_name', 'contact')->first();
        $contactSettings = $contactPage ? $contactPage->settings : [];

        $achievements = Achievement::where('home_page_show', true)->orderBy('sort')->limit(3)->get();
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
            'achievements' => $achievements,
        ]);
    }
}
