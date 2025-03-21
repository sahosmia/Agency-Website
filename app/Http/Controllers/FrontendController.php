<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ClientReview;
use App\Models\Project;
use App\Models\Service;
use App\Models\Software;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // Home Page
    public function home()
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
            'client_reviews' => $client_reviews
        ]);
    }

    // About Page
    public function about()
    {
        $teams = Team::get();
        return view('frontend.about', ['teams' => $teams]);
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
    // Career Page No Jobs ==============================
    public function single_software_page()
    {
        return view('frontend.single-software-page');
    }
    public function single_software_plan_page()
    {
        return view('frontend.single-software-plan-page');
    }

    public function all_softwares()
    {
        return view('frontend.all-softwares');
    }
    public function lets_discuss()
    {
        return view('frontend.lets-discuss');
    }
    public function confirmation()
    {
        return view('frontend.confirmation');
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
