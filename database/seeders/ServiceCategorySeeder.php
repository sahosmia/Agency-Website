<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => 'Web design & development',
                'slug' => 'web-design-development',
                'description' => 'We offer web development, SEO, branding, and digital marketing services.',
            ],
            [
                'title' => 'Mobile App Development',
                'slug' => 'mobile-app-development',
                'description' => '',
            ],
            [
                'title' => 'UI/UX design',
                'slug' => 'ui-ux-design',
                'description' => 'Yes, we build custom software tailored to your business needs.',
            ],
            [
                'title' => 'E-commerce Solutions',
                'slug' => 'e-commerce-solutions',
                'description' => 'Our pricing depends on project complexity. Contact us for a quote.',
            ],
            [
                'title' => 'Social Media Marketing',
                'slug' => 'social-media-marketing',
                'description' => 'Yes, we offer maintenance and support services after deployment.',
            ],
            [
                'title' => 'SEO',
                'slug' => 'seo',
                'description' => 'Yes, we offer maintenance and support services after deployment.',
            ],
            [
                'title' => 'Data Solution',
                'slug' => 'data-solution',
                'description' => '',
            ],
            [
                'title' => 'Artificial Intelligence',
                'slug' => 'artificial-intelligence',
                'description' => '',
            ],
            [
                'title' => 'Internet of Things (IoT)',
                'slug' => 'internet-of-things-iot',
                'description' => '',
            ],
            [
                'title' => 'Software Architecting',
                'slug' => 'software-architecting',
                'description' => '',
            ],
            [
                'title' => 'Business Consultation',
                'slug' => 'business-consultation',
                'description' => '',
            ],
        ];

        foreach ($datas as $data) {
            ServiceCategory::create($data);
        }
    }
}
