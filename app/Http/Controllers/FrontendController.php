<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
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
    public function articles(Request $request)
    {
        $articles_category = ArticleCategory::get();

        $articles = Article::with('article_category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('article_category_id', $request->category);
            })
            ->paginate(6);
        // return ($articles);
        return view('frontend.articles', ['articles' => $articles, 'articles_category' => $articles_category]);
    }

    // articles_single_page
    public function articles_single_page(Article $article)
    {

        $article->load('article_category:id,title');
        // $articles = Article::with('article_category:id,title')->where('article_category_id', $article->article_category_id)->get();
        // return ($articles);
        $articles = Article::with('article_category:id,title')->limit(5)->get();
        $faqs = Faq::get();

        return view('frontend.articles-single-page', ['articles' => $articles, 'article_data' => $article, 'faqs' => $faqs]);
    }


    // Job Section ==============================
    public function job_apply()
    {
        return view('frontend.job.job-apply');
    }
    // Job Section ==============================
    public function jobApplyQuestion()
    {
        return view('frontend.job.job-apply-question');
    }
    // Career Page No Jobs ==============================
    public function careerPageNoJobs()
    {
        return view('frontend.job.career-page-no-jobs');
    }
    // Congratulation page ==============================
    public function congratulationPage()
    {
        return view('frontend.job.congratulation-page');
    }
<<<<<<< HEAD
    //Thank you page ==============================
    public function thankYouPage() {
        return view('frontend.thank-you-page');
    }
    // Not Found page ==============================
    public function notFoundPage() {
        return view('frontend.not-found-page');
    }
    // Maintenance page ==============================
    public function maintenancePage() {
        return view('frontend.maintenance-page');
    }
    // // Login page ==============================
    // public function logIn() {
    //     return view('auth.login.log-in');
    // }
    // // Forget password page ==============================
    // public function forgetPassword() {
    //     return view('auth.forget-password');
    // }
    // // Otp Verification  page ==============================
    // public function otpVerification() {
    //     return view('auth.otp-verification');
    // }
    // // Create new password page ==============================
    // public function createNewPassword() {
    //     return view('auth.create-new-password');
    // }

=======
>>>>>>> sahos
}
