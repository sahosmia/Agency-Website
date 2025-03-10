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
        $articles = Article::with('article_category:id,title')->latest()->limit(8)->get();
        // return ($articles);
        return view('frontend.home', ['articles' => $articles]);
    }

    // About Page
    public function about()
    {
        return view('frontend.about');
    }

    // Services Page ===========================================================
    public function services()
    {
        return view('frontend.service.services');
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



    // Contact Page
    public function contact()
    {
        return view('frontend.contact');
    }
    // terms-and-condition
    public function terms_conditions()
    {
        return view('frontend.terms-conditions');
    }
    // terms-and-condition
    public function privacy_policy()
    {
        return view('frontend.privacy-policy');
    }

    // articles ==================================================================================



    // Job Section ===============================================================================
    public function job_apply()
    {
        return view('frontend.job.job-apply');
    }
    // Job Section ==============================
    public function job_apply_question()
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
    //Thank you page ==============================
    public function thankYouPage()
    {
        return view('frontend.thank-you-page');
    }

    // Maintenance page ==============================
    public function maintenancePage()
    {
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

}
