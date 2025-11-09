<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PageSetting;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Category;
use App\Models\Feature;

class PageController extends Controller
{
    private function getPageSettings($pageName)
    {
        $page = PageSetting::where('page_name', $pageName)->first();
        return $page ? $page->settings : [];
    }

    public function about()
    {
        $teams = Team::active()->get();
        $aboutSettings = $this->getPageSettings('about');

        return view('frontend.about', compact('teams', 'aboutSettings'));
    }

    public function terms_conditions()
    {
        $termsSettings = $this->getPageSettings('terms');

        return view('frontend.terms-conditions', compact('termsSettings'));
    }

    public function privacy_policy()
    {
        $privacySettings = $this->getPageSettings('privacy');

        return view('frontend.privacy-policy', compact('privacySettings'));
    }

    public function job_apply_question()
    {
        $jobApplyQuestionSettings = $this->getPageSettings('job-apply-question');
        return view('frontend.job.job-apply-question', compact('jobApplyQuestionSettings'));
    }

    public function single_software_page()
    {
        $singleSoftwarePageSettings = $this->getPageSettings('single-software-page');
        return view('frontend.single-software-page', compact('singleSoftwarePageSettings'));
    }

    public function single_software_plan_page()
    {
        $singleSoftwarePlanPageSettings = $this->getPageSettings('single-software-plan-page');
        return view('frontend.single-software-plan-page', compact('singleSoftwarePlanPageSettings'));
    }

    public function all_softwares()
    {
        $allSoftwaresSettings = $this->getPageSettings('all-softwares');

        return view('frontend.all-softwares', compact('allSoftwaresSettings'));
    }

    public function lets_discuss()
    {
        $letsDiscussSettings = $this->getPageSettings('lets-discuss');

        return view('frontend.lets-discuss', compact('letsDiscussSettings'));
    }

    public function confirmation()
    {
        $confirmationSettings = $this->getPageSettings('confirmation');
        return view('frontend.confirmation', compact('confirmationSettings'));
    }

    public function congratulationPage()
    {
        $congratulationPageSettings = $this->getPageSettings('congratulation-page');
        return view('frontend.job.congratulation-page', compact('congratulationPageSettings'));
    }

    public function thankYouPage()
    {
        $thankYouSettings = $this->getPageSettings('thank-you');

        return view('frontend.thank-you-page', compact('thankYouSettings'));
    }

    public function maintenancePage()
    {
        $maintenancePageSettings = $this->getPageSettings('maintenance-page');
        return view('frontend.maintenance-page', compact('maintenancePageSettings'));
    }

    public function ourWork()
    {
        $ourWorkSettings = $this->getPageSettings('our-work');
        return view('frontend.our-work', compact('ourWorkSettings'));
    }

    public function custom_software()
    {
        $customSoftwareSettings = $this->getPageSettings('custom-software');

        return view('frontend.custom-software', compact('customSoftwareSettings'));
    }

    public function service_plans()
    {
        $categories = Category::with('services.serviceTypes.pricePlans.features')->get();
        $features = Feature::all();
        $servicePlansSettings = $this->getPageSettings('service-plans');
        return view('frontend.service-plans', compact('Categories', 'features', 'servicePlansSettings'));
    }

    public function software_plans()
    {
        $softwareCategories = Category::with('softwares.pricePlans.features')->get();
        $features = Feature::all();
        $softwarePlansSettings = $this->getPageSettings('software-plans');
        return view('frontend.software-plans', compact('softwareCategories', 'features', 'softwarePlansSettings'));
    }
}
