<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Models\PageSetting;
use Illuminate\Http\Request;

class PageSettingController extends Controller
{
    use FileUploadTrait;

    private function updatePageSettings(Request $request, $pageName, $fields, $imageFields = [])
    {
        $page = PageSetting::firstOrNew(['page_name' => $pageName]);
        $settings = $page->settings ?? [];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                $settings[$field] = $request->input($field);
            }
        }

        foreach ($imageFields as $imageField) {
            if ($request->hasFile($imageField['name'])) {
                $settings[$imageField['name']] = $this->uploadFile($request, $imageField['name'], $imageField['path']);
            }
        }

        $page->settings = $settings;
        $page->save();
    }

    public function about()
    {
        $aboutPage = PageSetting::where('page_name', 'about')->first();
        $aboutSettings = $aboutPage ? $aboutPage->settings : [];

        return view('admin.pages.about', compact('aboutSettings'));
    }

    public function aboutUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'about_us_title' => 'required|string|max:255',
            'about_us_description' => 'required|string',
            'about_us_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'achievement_title' => 'required|string|max:255',
            'achievement_description' => 'required|string',
            'achievement_one_title' => 'required|string|max:255',
            'achievement_one_value' => 'required|string|max:255',
            'achievement_two_title' => 'required|string|max:255',
            'achievement_two_value' => 'required|string|max:255',
            'achievement_three_title' => 'required|string|max:255',
            'achievement_three_value' => 'required|string|max:255',
            'journey_title' => 'required|string|max:255',
            'journey_description' => 'required|string',
            'journey_one_title' => 'required|string|max:255',
            'journey_one_description' => 'required|string',
            'journey_two_title' => 'required|string|max:255',
            'journey_two_description' => 'required|string',
            'journey_three_title' => 'required|string|max:255',
            'journey_three_description' => 'required|string',
            'team_title' => 'required|string|max:255',
        ]);

        $fields = [
            'page_title', 'about_us_title', 'about_us_description', 'achievement_title',
            'achievement_description', 'achievement_one_title', 'achievement_one_value',
            'achievement_two_title', 'achievement_two_value', 'achievement_three_title',
            'achievement_three_value', 'journey_title', 'journey_description',
            'journey_one_title', 'journey_one_description', 'journey_two_title',
            'journey_two_description', 'journey_three_title', 'journey_three_description',
            'team_title'
        ];

        $imageFields = [
            ['name' => 'about_us_image', 'path' => 'uploads/about']
        ];

        $this->updatePageSettings($request, 'about', $fields, $imageFields);

        return redirect()->back()->with('success', 'About Us page settings updated successfully.');
    }

    public function home()
    {
        $homePage = PageSetting::where('page_name', 'home')->first();
        $homeSettings = $homePage ? $homePage->settings : [];

        return view('admin.pages.home', compact('homeSettings'));
    }

    public function homeUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string|max:255',
            'hero_button_text' => 'required|string|max:255',
            'services_title' => 'required|string|max:255',
            'services_description' => 'required|string',
            'software_title' => 'required|string|max:255',
            'software_description' => 'required|string',
            'projects_title' => 'required|string|max:255',
            'projects_description' => 'required|string',
            'contact_title' => 'required|string|max:255',
            'client_reviews_title' => 'required|string|max:255',
            'client_reviews_description' => 'required|string',
            'hero_card_description' => 'required|string',
            'hero_card_one_title' => 'required|string|max:255',
            'hero_card_one_value' => 'required|string|max:255',
            'hero_card_one_description' => 'required|string',
            'hero_card_two_title' => 'required|string|max:255',
            'hero_card_two_value' => 'required|string|max:255',
            'hero_card_two_description' => 'required|string',
            'hero_card_three_title' => 'required|string|max:255',
            'hero_card_three_value' => 'required|string|max:255',
            'hero_card_three_description' => 'required|string',
            'search_title' => 'required|string|max:255',
            'values_title' => 'required|string|max:255',
            'working_process_title' => 'required|string|max:255',
            'faq_title' => 'required|string|max:255',
            'articles_title' => 'required|string|max:255',
            'articles_description' => 'required|string',
            'trusted_partners_title' => 'required|string|max:255',
            'trusted_partners_description' => 'required|string',
            'clients_around_world_title' => 'required|string|max:255',
            'clients_around_world_description' => 'required|string',

            'tech_partner_one_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tech_partner_two_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tech_partner_three_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reviewer_one_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reviewer_two_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reviewer_three_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reviewer_four_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'software_solution_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'client_country_one_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'client_country_two_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'client_country_three_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'client_country_four_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'client_country_five_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'article_default_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fields = [
            'page_title', 'hero_title', 'hero_subtitle', 'hero_button_text',
            'services_title', 'services_description', 'software_title',
            'software_description', 'projects_title', 'projects_description',
            'contact_title', 'client_reviews_title', 'client_reviews_description',
            'hero_card_description', 'hero_card_one_title', 'hero_card_one_value',
            'hero_card_one_description', 'hero_card_two_title', 'hero_card_two_value',
            'hero_card_two_description', 'hero_card_three_title',
            'hero_card_three_value', 'hero_card_three_description', 'search_title',
            'values_title', 'working_process_title', 'faq_title', 'articles_title',
            'articles_description', 'trusted_partners_title', 'trusted_partners_description',
            'clients_around_world_title', 'clients_around_world_description'
        ];

        $imageFields = [
            ['name' => 'tech_partner_one_image', 'path' => 'uploads/home'],
            ['name' => 'tech_partner_two_image', 'path' => 'uploads/home'],
            ['name' => 'tech_partner_three_image', 'path' => 'uploads/home'],
            ['name' => 'reviewer_one_image', 'path' => 'uploads/home'],
            ['name' => 'reviewer_two_image', 'path' => 'uploads/home'],
            ['name' => 'reviewer_three_image', 'path' => 'uploads/home'],
            ['name' => 'reviewer_four_image', 'path' => 'uploads/home'],
            ['name' => 'software_solution_image', 'path' => 'uploads/home'],
            ['name' => 'client_country_one_image', 'path' => 'uploads/home'],
            ['name' => 'client_country_two_image', 'path' => 'uploads/home'],
            ['name' => 'client_country_three_image', 'path' => 'uploads/home'],
            ['name' => 'client_country_four_image', 'path' => 'uploads/home'],
            ['name' => 'client_country_five_image', 'path' => 'uploads/home'],
            ['name' => 'article_default_image', 'path' => 'uploads/home'],
        ];

        $this->updatePageSettings($request, 'home', $fields, $imageFields);

        return redirect()->back()->with('success', 'Home page settings updated successfully.');
    }

    public function contact()
    {
        $contactPage = PageSetting::where('page_name', 'contact')->first();
        $contactSettings = $contactPage ? $contactPage->settings : [];

        return view('admin.pages.contact', compact('contactSettings'));
    }

    public function contactUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'contact_title' => 'required|string|max:255',
            'contact_description' => 'required|string',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'required|string|max:255',
            'contact_address' => 'required|string|max:255',
            'contact_map_iframe_url' => 'required|string',
        ]);

        $fields = [
            'page_title', 'contact_title', 'contact_description', 'contact_email',
            'contact_phone', 'contact_address', 'contact_map_iframe_url'
        ];

        $this->updatePageSettings($request, 'contact', $fields);

        return redirect()->back()->with('success', 'Contact page settings updated successfully.');
    }

    public function notFound()
    {
        $notFoundPage = PageSetting::where('page_name', '404')->first();
        $notFoundSettings = $notFoundPage ? $notFoundPage->settings : [];

        return view('admin.pages.404', compact('notFoundSettings'));
    }

    public function notFoundUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            '404_title' => 'required|string|max:255',
            '404_description' => 'required|string',
            '404_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fields = ['page_title', '404_title', '404_description'];
        $imageFields = [
            ['name' => '404_image', 'path' => 'uploads/404']
        ];

        $this->updatePageSettings($request, '404', $fields, $imageFields);

        return redirect()->back()->with('success', '404 page settings updated successfully.');
    }

    public function terms()
    {
        $termsPage = PageSetting::where('page_name', 'terms')->first();
        $termsSettings = $termsPage ? $termsPage->settings : [];

        return view('admin.pages.terms', compact('termsSettings'));
    }

    public function termsUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'terms_title' => 'required|string|max:255',
            'terms_content' => 'required|string',
        ]);

        $fields = ['page_title', 'terms_title', 'terms_content'];
        $this->updatePageSettings($request, 'terms', $fields);

        return redirect()->back()->with('success', 'Terms & Conditions page settings updated successfully.');
    }

    public function privacy()
    {
        $privacyPage = PageSetting::where('page_name', 'privacy')->first();
        $privacySettings = $privacyPage ? $privacyPage->settings : [];

        return view('admin.pages.privacy', compact('privacySettings'));
    }

    public function privacyUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'privacy_title' => 'required|string|max:255',
            'privacy_content' => 'required|string',
        ]);

        $fields = ['page_title', 'privacy_title', 'privacy_content'];
        $this->updatePageSettings($request, 'privacy', $fields);

        return redirect()->back()->with('success', 'Privacy Policy page settings updated successfully.');
    }

    public function services()
    {
        $servicesPage = PageSetting::where('page_name', 'services')->first();
        $servicesSettings = $servicesPage ? $servicesPage->settings : [];

        return view('admin.pages.services', compact('servicesSettings'));
    }

    public function servicesUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $fields = ['page_title', 'title', 'description'];
        $this->updatePageSettings($request, 'services', $fields);

        return redirect()->back()->with('success', 'Services page settings updated successfully.');
    }

    public function articles()
    {
        $articlesPage = PageSetting::where('page_name', 'articles')->first();
        $articlesSettings = $articlesPage ? $articlesPage->settings : [];

        return view('admin.pages.articles', compact('articlesSettings'));
    }

    public function articlesUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $fields = ['page_title', 'title', 'description'];
        $this->updatePageSettings($request, 'articles', $fields);

        return redirect()->back()->with('success', 'Articles page settings updated successfully.');
    }

    public function softwares()
    {
        $softwaresPage = PageSetting::where('page_name', 'softwares')->first();
        $softwaresSettings = $softwaresPage ? $softwaresPage->settings : [];

        return view('admin.pages.softwares', compact('softwaresSettings'));
    }

    public function softwaresUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $fields = ['page_title', 'title', 'description'];
        $this->updatePageSettings($request, 'softwares', $fields);

        return redirect()->back()->with('success', 'Software page settings updated successfully.');
    }

    public function projects()
    {
        $projectsPage = PageSetting::where('page_name', 'projects')->first();
        $projectsSettings = $projectsPage ? $projectsPage->settings : [];

        return view('admin.pages.projects', compact('projectsSettings'));
    }

    public function projectsUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $fields = ['page_title', 'title', 'description'];
        $this->updatePageSettings($request, 'projects', $fields);

        return redirect()->back()->with('success', 'Projects page settings updated successfully.');
    }

    public function allSoftwares()
    {
        $allSoftwaresPage = PageSetting::where('page_name', 'all-softwares')->first();
        $allSoftwaresSettings = $allSoftwaresPage ? $allSoftwaresPage->settings : [];

        return view('admin.pages.all-softwares', compact('allSoftwaresSettings'));
    }

    public function allSoftwaresUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'section_title' => 'required|string|max:255',
        ]);

        $fields = ['page_title', 'title', 'description', 'section_title'];
        $this->updatePageSettings($request, 'all-softwares', $fields);

        return redirect()->back()->with('success', 'All Software page settings updated successfully.');
    }

    public function customSoftware()
    {
        $customSoftwarePage = PageSetting::where('page_name', 'custom-software')->first();
        $customSoftwareSettings = $customSoftwarePage ? $customSoftwarePage->settings : [];

        return view('admin.pages.custom-software', compact('customSoftwareSettings'));
    }

    public function customSoftwareUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'why_choose_title' => 'required|string|max:255',
            'why_choose_description' => 'required|string',
            'key_features_title' => 'required|string|max:255',
            'plans_title' => 'required|string|max:255',
            'technologies_title' => 'required|string|max:255',
        ]);

        $fields = [
            'page_title', 'title', 'description', 'why_choose_title',
            'why_choose_description', 'key_features_title', 'plans_title',
            'technologies_title'
        ];
        $this->updatePageSettings($request, 'custom-software', $fields);

        return redirect()->back()->with('success', 'Custom Software page settings updated successfully.');
    }

    public function letsDiscuss()
    {
        $letsDiscussPage = PageSetting::where('page_name', 'lets-discuss')->first();
        $letsDiscussSettings = $letsDiscussPage ? $letsDiscussPage->settings : [];

        return view('admin.pages.lets-discuss', compact('letsDiscussSettings'));
    }

    public function letsDiscussUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ]);

        $fields = ['page_title', 'title', 'subtitle'];
        $this->updatePageSettings($request, 'lets-discuss', $fields);

        return redirect()->back()->with('success', 'Let\'s Discuss page settings updated successfully.');
    }

    public function thankYou()
    {
        $thankYouPage = PageSetting::where('page_name', 'thank-you')->first();
        $thankYouSettings = $thankYouPage ? $thankYouPage->settings : [];

        return view('admin.pages.thank-you', compact('thankYouSettings'));
    }

    public function thankYouUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ]);

        $fields = ['page_title', 'title', 'subtitle'];
        $this->updatePageSettings($request, 'thank-you', $fields);

        return redirect()->back()->with('success', 'Thank You page settings updated successfully.');
    }

    public function servicePlans()
    {
        $servicePlansPage = PageSetting::where('page_name', 'service-plans')->first();
        $servicePlansSettings = $servicePlansPage ? $servicePlansPage->settings : [];

        return view('admin.pages.service-plans', compact('servicePlansSettings'));
    }

    public function servicePlansUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);

        $fields = ['page_title', 'title'];
        $this->updatePageSettings($request, 'service-plans', $fields);

        return redirect()->back()->with('success', 'Service Plans page settings updated successfully.');
    }

    public function softwarePlans()
    {
        $softwarePlansPage = PageSetting::where('page_name', 'software-plans')->first();
        $softwarePlansSettings = $softwarePlansPage ? $softwarePlansPage->settings : [];

        return view('admin.pages.software-plans', compact('softwarePlansSettings'));
    }

    public function softwarePlansUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);

        $fields = ['page_title', 'title'];
        $this->updatePageSettings($request, 'software-plans', $fields);

        return redirect()->back()->with('success', 'Software Plans page settings updated successfully.');
    }

    public function careers()
    {
        $careersPage = PageSetting::where('page_name', 'careers')->first();
        $careersSettings = $careersPage ? $careersPage->settings : [];

        return view('admin.pages.careers', compact('careersSettings'));
    }

    public function careersUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);

        $fields = ['page_title', 'title'];
        $this->updatePageSettings($request, 'careers', $fields);

        return redirect()->back()->with('success', 'Careers page settings updated successfully.');
    }

    public function serviceDetail()
    {
        $serviceDetailPage = PageSetting::where('page_name', 'service-detail')->first();
        $serviceDetailSettings = $serviceDetailPage ? $serviceDetailPage->settings : [];

        return view('admin.pages.service-detail', compact('serviceDetailSettings'));
    }

    public function serviceDetailUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'key_features_title' => 'required|string|max:255',
            'technologies_title' => 'required|string|max:255',
            'service_plans_title' => 'required|string|max:255',
        ]);

        $fields = ['page_title', 'key_features_title', 'technologies_title', 'service_plans_title'];
        $this->updatePageSettings($request, 'service-detail', $fields);

        return redirect()->back()->with('success', 'Service Detail page settings updated successfully.');
    }

    public function articleDetail()
    {
        $articleDetailPage = PageSetting::where('page_name', 'article-detail')->first();
        $articleDetailSettings = $articleDetailPage ? $articleDetailPage->settings : [];

        return view('admin.pages.article-detail', compact('articleDetailSettings'));
    }

    public function articleDetailUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'other_articles_title' => 'required|string|max:255',
            'other_articles_description' => 'required|string',
        ]);

        $fields = ['page_title', 'other_articles_title', 'other_articles_description'];
        $this->updatePageSettings($request, 'article-detail', $fields);

        return redirect()->back()->with('success', 'Article Detail page settings updated successfully.');
    }

    public function softwareDetail()
    {
        $softwareDetailPage = PageSetting::where('page_name', 'software-detail')->first();
        $softwareDetailSettings = $softwareDetailPage ? $softwareDetailPage->settings : [];

        return view('admin.pages.software-detail', compact('softwareDetailSettings'));
    }

    public function softwareDetailUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'key_features_title' => 'required|string|max:255',
            'technologies_title' => 'required|string|max:255',
            'software_plans_title' => 'required|string|max:255',
        ]);

        $fields = ['page_title', 'key_features_title', 'technologies_title', 'software_plans_title'];
        $this->updatePageSettings($request, 'software-detail', $fields);

        return redirect()->back()->with('success', 'Software Detail page settings updated successfully.');
    }

    public function projectDetail()
    {
        $projectDetailPage = PageSetting::where('page_name', 'project-detail')->first();
        $projectDetailSettings = $projectDetailPage ? $projectDetailPage->settings : [];

        return view('admin.pages.project-detail', compact('projectDetailSettings'));
    }

    public function projectDetailUpdate(Request $request)
    {
        $request->validate([
            'page_title' => 'required|string|max:255',
            'client_reviews_title' => 'required|string|max:255',
            'other_projects_title' => 'required|string|max:255',
            'other_projects_description' => 'required|string',
        ]);

        $fields = ['page_title', 'client_reviews_title', 'other_projects_title', 'other_projects_description'];
        $this->updatePageSettings($request, 'project-detail', $fields);

        return redirect()->back()->with('success', 'Project Detail page settings updated successfully.');
    }

    public function header()
    {
        $headerPage = PageSetting::where('page_name', 'header')->first();
        $headerSettings = $headerPage ? $headerPage->settings : [];

        return view('admin.pages.header', compact('headerSettings'));
    }

    public function headerUpdate(Request $request)
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageFields = [
            ['name' => 'logo', 'path' => 'uploads/header']
        ];

        $this->updatePageSettings($request, 'header', [], $imageFields);

        return redirect()->back()->with('success', 'Header settings updated successfully.');
    }
}
