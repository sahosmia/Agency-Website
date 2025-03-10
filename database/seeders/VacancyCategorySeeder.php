<?php

namespace Database\Seeders;

use App\Models\VacancyCategory;
use Illuminate\Database\Seeder;

class VacancyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => 'Web developer',
                'slug' => 'web-developer',
                'description' => 'We offer web development, SEO, branding, and digital marketing services.'
            ],
            [
                'title' => 'Mobile App Development',
                'slug' => 'mobile-app-development',
                'description' => ''
            ],
            [
                'title' => 'UI/UX design',
                'slug' => 'ui-ux-design',
                'description' => 'Yes, we build custom software tailored to your business needs.'
            ],

            [
                'title' => 'SEO Expert',
                'slug' => 'seo-expert',
                'description' => 'Yes, we offer maintenance and support services after deployment.'
            ],
            [
                'title' => 'Data Analyst',
                'slug' => 'data-analyst',
                'description' => ''
            ],
            [
                'title' => 'Data Engineer',
                'slug' => 'data-engineer',
                'description' => ''
            ],
            [
                'title' => 'Software Engineer',
                'slug' => 'software-engineer',
                'description' => ''
            ],
            [
                'title' => 'ML Engineer',
                'slug' => 'ml-engineer',
                'description' => ''
            ],
            [
                'title' => 'Business Consultation',
                'slug' => 'business-consultation',
                'description' => ''
            ],
        ];

        foreach ($datas as $data) {
            VacancyCategory::create($data);
        }
    }
}
