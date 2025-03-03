<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Home Page
    public function home()
    {
        $faqs = Faq::get();
        return view('frontend.home', ['faqs' => $faqs]);
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
    // terms-and-condition
    public function articlesSinglePage()
    {
        return view('frontend.articles-single-page');
    }

}
