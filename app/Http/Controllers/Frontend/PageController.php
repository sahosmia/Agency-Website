<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\SoftwareCategory;
use App\Models\Feature;

class PageController extends Controller
{
    public function about()
    {
        $teams = Team::get();

        return view('frontend.about', ['teams' => $teams]);
    }

    public function terms_conditions()
    {
        return view('frontend.terms-conditions');
    }

    public function privacy_policy()
    {
        return view('frontend.privacy-policy');
    }

    public function job_apply_question()
    {
        return view('frontend.job.job-apply-question');
    }

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

    public function congratulationPage()
    {
        return view('frontend.job.congratulation-page');
    }

    public function thankYouPage()
    {
        return view('frontend.thank-you-page');
    }

    public function maintenancePage()
    {
        return view('frontend.maintenance-page');
    }

    public function ourWork()
    {
        return view('frontend.our-work');
    }

    public function custom_software()
    {
        return view('frontend.custom-software');
    }

    public function service_plans()
    {
        $serviceCategories = ServiceCategory::with('services.serviceTypes.pricePlans.features')->get();
        $features = Feature::all();
        return view('frontend.service-plans', compact('serviceCategories', 'features'));
    }

    public function software_plans()
    {
        $softwareCategories = SoftwareCategory::with('softwares.pricePlans.features')->get();
        $features = Feature::all();
        return view('frontend.software-plans', compact('softwareCategories', 'features'));
    }
}
