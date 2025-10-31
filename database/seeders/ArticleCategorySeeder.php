<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
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
            ],
            [
                'title' => 'Mobile App Development',
                'slug' => 'mobile-app-development',
            ],
            [
                'title' => 'UI/UX design',
                'slug' => 'ui-ux-design',
            ],
            [
                'title' => 'E-commerce Solutions',
                'slug' => 'e-commerce-solutions',
            ],
            [
                'title' => 'Social Media Marketing',
                'slug' => 'social-media-marketing',
            ],
            [
                'title' => 'SEO',
                'slug' => 'seo',
            ],
            [
                'title' => 'Data Solution',
                'slug' => 'data-solution',
            ],
            [
                'title' => 'Artificial Intelligence',
                'slug' => 'artificial-intelligence',
            ],
            [
                'title' => 'Internet of Things (IoT)',
                'slug' => 'internet-of-things-iot',
            ],
            [
                'title' => 'Software Architecting',
                'slug' => 'software-architecting',
            ],
            [
                'title' => 'Business Consultation',
                'slug' => 'business-consultation',
            ],
        ];

        foreach ($datas as $data) {
            ArticleCategory::create($data);
        }
    }
}
