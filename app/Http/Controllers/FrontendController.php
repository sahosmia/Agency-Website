<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Faq;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Home Page
    public function home()
    {
        $faqs = Faq::get();
        $articles = Article::with('article_category:id,title')->get();
        // return ($articles);
        return view('frontend.home', ['faqs' => $faqs, 'articles' => $articles]);
    }

    // About Page
    public function about()
    {
        return view('frontend.about');
    }

    // Services Page
    public function services()
    {
        return view('frontend.services');
    }

    // Software Page
    public function software()
    {
        return view('frontend.software');
    }

    // projects Page
    public function projects()
    {
        return view('frontend.projects');
    }

    // Our Work Page
    public function ourWork()
    {
        return view('frontend.our-work');
    }

    // Insights (Blog) Page
    public function insights()
    {
        return view('frontend.insights');
    }

    // Contact Page
    public function contact()
    {
        return view('frontend.contact');
    }
    // terms-and-condition
    public function termsAndCondition()
    {
        return view('frontend.contact');
    }
    // terms-and-condition
    public function articles()
    {
        return view('frontend.articles');
    }

    // Job Section ==============================
    public function job_apply()
    {
        return view('frontend.job.job-apply');
    }
}
