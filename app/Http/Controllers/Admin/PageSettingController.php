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
                'sections' => [
                    'seo' => [
                        'title' => 'SEO & General Information',
                        'fields' => [
                            ['name' => 'page_title', 'label' => 'Page Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'meta_title', 'label' => 'Meta Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'meta_description', 'label' => 'Meta Description', 'type' => 'textarea', 'rules' => 'required|string'],
                            ['name' => 'item_limit', 'label' => 'Item Limit', 'type' => 'number', 'rules' => 'nullable|numeric|min:1'],
                        ],
                    ],
                    'hero' => [
                        'title' => 'Hero Section',
                        'fields' => [
                            ['name' => 'hero_section_is_active', 'label' => 'Section is active', 'type' => 'checkbox', 'rules' => 'nullable|boolean'],
                            ['name' => 'hero_title', 'label' => 'Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'hero_subtitle', 'label' => 'Subtitle', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'hero_button_text', 'label' => 'Button Text', 'type' => 'text', 'rules' => 'required|string|max:255'],
                        ],
                    ],
                    'services' => [
                        'title' => 'Services Section',
                        'fields' => [
                            ['name' => 'services_section_is_active', 'label' => 'Section is active', 'type' => 'checkbox', 'rules' => 'nullable|boolean'],
                            ['name' => 'services_title', 'label' => 'Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'services_description', 'label' => 'Description', 'type' => 'textarea', 'rules' => 'required|string'],
                        ],
                    ],
                ],
            ],
            'other_page' => [
                'sections' => [
                    'seo' => [
                        'title' => 'SEO & General Information',
                        'fields' => [
                            ['name' => 'page_title', 'label' => 'Page Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'meta_title', 'label' => 'Meta Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'meta_description', 'label' => 'Meta Description', 'type' => 'textarea', 'rules' => 'required|string'],
                            ['name' => 'admin_pagination', 'label' => 'Admin Pagination', 'type' => 'number', 'rules' => 'nullable|numeric|min:1'],
                        ],
                    ],
                    'main_content' => [
                        'title' => 'Main Content',
                        'fields' => [
                            ['name' => 'title', 'label' => 'Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'rules' => 'required|string'],
                        ],
                    ],
                ],
            ],
            'contact_information' => [
                'sections' => [
                    'seo' => [
                        'title' => 'SEO & General Information',
                        'fields' => [
                            ['name' => 'page_title', 'label' => 'Page Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'meta_title', 'label' => 'Meta Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'meta_description', 'label' => 'Meta Description', 'type' => 'textarea', 'rules' => 'required|string'],
                        ],
                    ],
                    'contact_details' => [
                        'title' => 'Contact Details',
                        'fields' => [
                            ['name' => 'contact_title', 'label' => 'Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'contact_description', 'label' => 'Description', 'type' => 'textarea', 'rules' => 'required|string'],
                            ['name' => 'contact_email', 'label' => 'Email', 'type' => 'email', 'rules' => 'required|email|max:255'],
                            ['name' => 'contact_phone', 'label' => 'Phone', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'contact_address', 'label' => 'Address', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'contact_map_iframe_url', 'label' => 'Map Iframe URL', 'type' => 'textarea', 'rules' => 'required|string'],
                        ],
                    ],
                ],
            ],
            'common_setting' => [
                'sections' => [
                    '404_page' => [
                        'title' => '404 Page',
                        'fields' => [
                            ['name' => '404_title', 'label' => 'Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => '404_description', 'label' => 'Description', 'type' => 'textarea', 'rules' => 'required|string'],
                            ['name' => '404_image', 'label' => 'Image', 'type' => 'image', 'rules' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 'path' => 'uploads/404'],
                        ],
                    ],
                    'terms_and_privacy' => [
                        'title' => 'Terms & Privacy',
                        'fields' => [
                            ['name' => 'terms_title', 'label' => 'Terms Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'terms_content', 'label' => 'Terms Content', 'type' => 'ckeditor', 'rules' => 'required|string'],
                            ['name' => 'privacy_title', 'label' => 'Privacy Title', 'type' => 'text', 'rules' => 'required|string|max:255'],
                            ['name' => 'privacy_content', 'label' => 'Privacy Content', 'type' => 'ckeditor', 'rules' => 'required|string'],
                        ],
                    ],
                    'general' => [
                        'title' => 'General Settings',
                        'fields' => [
                            ['name' => 'admin_pagination', 'label' => 'Admin Pagination', 'type' => 'number', 'rules' => 'nullable|numeric|min:1'],
                            ['name' => 'logo', 'label' => 'Logo', 'type' => 'image', 'rules' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 'path' => 'uploads/header'],
                        ],
                    ],
                ],
            ],
        ];

        return $fields[$pageName] ?? ['sections' => []];
    }

    public function index($pageName)
    {
        $page = PageSetting::where('page_name', $pageName)->first();
        $settings = $page ? $page->settings : [];
        $pageData = $this->getPageFields($pageName);
        $sections = $pageData['sections'] ?? [];
        $pageTitle = Str::of($pageName)->replace('_', ' ')->title();

        return view('admin.pages.index', compact('settings', 'pageName', 'sections', 'pageTitle'));
    }

    public function updateSection(Request $request, $pageName, $sectionKey)
    {
        $pageData = $this->getPageFields($pageName);
        $section = $pageData['sections'][$sectionKey] ?? null;

        if (!$section) {
            return redirect()->back()->with('error', 'Invalid section.');
        }

        $validationRules = [];
        foreach ($section['fields'] as $field) {
            $validationRules[$field['name']] = $field['rules'];
        }
        $request->validate($validationRules);

        $this->updatePageSettings($request, $pageName, $section['fields']);

        return redirect()->back()->with('success', $section['title'] . ' settings updated successfully.');
    }

    private function updatePageSettings(Request $request, string $pageName, array $fields)
    {
        $page = PageSetting::firstOrNew(['page_name' => $pageName]);
        $settings = $page->settings ?? [];

        foreach ($fields as $field) {
            $fieldName = $field['name'];
            $fieldType = $field['type'];

            if ($fieldType === 'image' && $request->hasFile($fieldName)) {
                // Assuming 'path' is defined in the field array for images
                $settings[$fieldName] = $this->uploadFile($request, $fieldName, $field['path']);
            } elseif ($fieldType === 'checkbox') {
                $settings[$fieldName] = $request->has($fieldName);
            } elseif ($request->has($fieldName)) {
                $settings[$fieldName] = $request->input($fieldName);
            }
        }

        $page->settings = $settings;
        $page->save();
    }
}
