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
            ],
            [
                'title' => 'Mobile App Development',
                'slug' => 'mobile-app-development',
            ],
            [
                'title' => 'UI/UX design',
                'slug' => 'ui-ux-design',
            ],
            // Visual designer
            [
                'title' => 'Visual Designer',
                'slug' => 'visual-designer',
            ],

            [
                'title' => 'SEO Expert',
                'slug' => 'seo-expert',
            ],
            [
                'title' => 'Data Analyst',
                'slug' => 'data-analyst',
            ],
            [
                'title' => 'Data Engineer',
                'slug' => 'data-engineer',
            ],
            [
                'title' => 'Software Engineer',
                'slug' => 'software-engineer',
            ],
            [
                'title' => 'ML Engineer',
                'slug' => 'ml-engineer',
            ],
            [
                'title' => 'Business Consultation',
                'slug' => 'business-consultation',
            ],
        ];

        foreach ($datas as $data) {
            VacancyCategory::create($data);
        }
    }
}
