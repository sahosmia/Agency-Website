<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Models\PageSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageSettingController extends Controller
{
    use FileUploadTrait;

    private function getPageFields($pageName)
    {
        $fields = [
            'home' => [
                'text_fields' => [
                    'page_title' => 'required|string|max:255',
                    'meta_title' => 'required|string|max:255',
                    'meta_description' => 'required|string',
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
                ],
                'textarea_fields' => [
                    'services_description',
                    'software_description',
                    'projects_description',
                    'client_reviews_description',
                    'hero_card_description',
                    'hero_card_one_description',
                    'hero_card_two_description',
                    'hero_card_three_description',
                    'articles_description',
                    'trusted_partners_description',
                    'clients_around_world_description',
                ],
                'image_fields' => [
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
                ],
                'upload_paths' => [
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
                ]
            ],
            'other_page' => [
                'text_fields' => [
                    'page_title' => 'required|string|max:255',
                    'meta_title' => 'required|string|max:255',
                    'meta_description' => 'required|string',
                    'title' => 'required|string|max:255',
                    'description' => 'required|string',
                    'section_title' => 'required|string|max:255',
                    'why_choose_title' => 'required|string|max:255',
                    'why_choose_description' => 'required|string',
                    'key_features_title' => 'required|string|max:255',
                    'plans_title' => 'required|string|max:255',
                    'technologies_title' => 'required|string|max:255',
                    'subtitle' => 'required|string|max:255',
                    'other_articles_title' => 'required|string|max:255',
                    'other_articles_description' => 'required|string',
                    'client_reviews_title' => 'required|string|max:255',
                    'other_projects_title' => 'required|string|max:255',
                    'other_projects_description' => 'required|string',
                ],
                'textarea_fields' => [
                    'description',
                    'why_choose_description',
                    'other_articles_description',
                    'other_projects_description',
                ],
                'image_fields' => [],
                'upload_paths' => []
            ],
            'contact_information' => [
                'text_fields' => [
                    'page_title' => 'required|string|max:255',
                    'meta_title' => 'required|string|max:255',
                    'meta_description' => 'required|string',
                    'contact_title' => 'required|string|max:255',
                    'contact_description' => 'required|string',
                    'contact_email' => 'required|email|max:255',
                    'contact_phone' => 'required|string|max:255',
                    'contact_address' => 'required|string|max:255',
                    'contact_map_iframe_url' => 'required|string',
                ],
                'textarea_fields' => ['contact_description', 'contact_map_iframe_url'],
                'image_fields' => [],
                'upload_paths' => []
            ],
            'common_setting' => [
                'text_fields' => [
                    '404_title' => 'required|string|max:255',
                    '404_description' => 'required|string',
                    'terms_title' => 'required|string|max:255',
                    'terms_content' => 'required|string',
                    'privacy_title' => 'required|string|max:255',
                    'privacy_content' => 'required|string',
                ],
                'textarea_fields' => ['404_description', 'terms_content', 'privacy_content'],
                'image_fields' => [
                    '404_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ],
                'upload_paths' => [
                    ['name' => '404_image', 'path' => 'uploads/404'],
                    ['name' => 'logo', 'path' => 'uploads/header'],
                ]
            ]
        ];

        return $fields[$pageName] ?? ['text_fields' => [], 'textarea_fields' => [], 'image_fields' => [], 'upload_paths' => []];
    }


    public function index($pageName)
    {
        $page = PageSetting::where('page_name', $pageName)->first();
        $settings = $page ? $page->settings : [];
        $fields = $this->getPageFields($pageName);
        $pageTitle = Str::of($pageName)->replace('_', ' ')->title();

        return view('admin.pages.index', compact('settings', 'pageName', 'fields', 'pageTitle'));
    }

    public function update(Request $request, $pageName)
    {
        $fields = $this->getPageFields($pageName);
        $validationRules = array_merge($fields['text_fields'], $fields['image_fields']);
        $request->validate($validationRules);

        $this->updatePageSettings($request, $pageName, array_keys($fields['text_fields']), $fields['upload_paths']);

        return redirect()->back()->with('success', Str::of($pageName)->replace('_', ' ')->title() . ' settings updated successfully.');
    }

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
}
