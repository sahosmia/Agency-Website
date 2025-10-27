<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PageSetting;
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
        $aboutPage = PageSetting::where('page_name', 'about')->first();
        $aboutSettings = $aboutPage ? $aboutPage->settings : [];

        return view('frontend.about', compact('teams', 'aboutSettings'));
    }

    public function terms_conditions()
    {
        $termsPage = PageSetting::where('page_name', 'terms')->first();
        $termsSettings = $termsPage ? $termsPage->settings : [];

        return view('frontend.terms-conditions', compact('termsSettings'));
    }

    public function privacy_policy()
    {
        $privacyPage = PageSetting::where('page_name', 'privacy')->first();
        $privacySettings = $privacyPage ? $privacyPage->settings : [];

        return view('frontend.privacy-policy', compact('privacySettings'));
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
        $allSoftwaresPage = PageSetting::where('page_name', 'all-softwares')->first();
        $allSoftwaresSettings = $allSoftwaresPage ? $allSoftwaresPage->settings : [];

        return view('frontend.all-softwares', compact('allSoftwaresSettings'));
    }

    public function lets_discuss()
    {
        $letsDiscussPage = PageSetting::where('page_name', 'lets-discuss')->first();
        $letsDiscussSettings = $letsDiscussPage ? $letsDiscussPage->settings : [];

        return view('frontend.lets-discuss', compact('letsDiscussSettings'));
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
        $thankYouPage = PageSetting::where('page_name', 'thank-you')->first();
        $thankYouSettings = $thankYouPage ? $thankYouPage->settings : [];

        return view('frontend.thank-you-page', compact('thankYouSettings'));
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
        $customSoftwarePage = PageSetting::where('page_name', 'custom-software')->first();
        $customSoftwareSettings = $customSoftwarePage ? $customSoftwarePage->settings : [];

        return view('frontend.custom-software', compact('customSoftwareSettings'));
    }

    public function service_plans()
    {
        $serviceCategories = ServiceCategory::with('services.serviceTypes.pricePlans.features')->get();
        $features = Feature::all();
        $servicePlansPage = PageSetting::where('page_name', 'service-plans')->first();
        $servicePlansSettings = $servicePlansPage ? $servicePlansPage->settings : [];
        return view('frontend.service-plans', compact('serviceCategories', 'features', 'servicePlansSettings'));
    }

    public function software_plans()
    {
        $softwareCategories = SoftwareCategory::with('softwares.pricePlans.features')->get();
        $features = Feature::all();
        $softwarePlansPage = PageSetting::where('page_name', 'software-plans')->first();
        $softwarePlansSettings = $softwarePlansPage ? $softwarePlansPage->settings : [];
        return view('frontend.software-plans', compact('softwareCategories', 'features', 'softwarePlansSettings'));
    }
}
