<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Web design & development',
                'slug' => 'web-design-development',
            ],
            [
                'name' => 'Mobile App Development',
                'slug' => 'mobile-app-development',
            ],
            [
                'name' => 'UI/UX design',
                'slug' => 'ui-ux-design',
            ],
            [
                'name' => 'E-commerce Solutions',
                'slug' => 'e-commerce-solutions',
            ],
            [
                'name' => 'Social Media Marketing',
                'slug' => 'social-media-marketing',
            ],
            [
                'name' => 'SEO',
                'slug' => 'seo',
            ],
            [
                'name' => 'Data Solution',
                'slug' => 'data-solution',
            ],
            [
                'name' => 'Artificial Intelligence',
                'slug' => 'artificial-intelligence',
            ],
            [
                'name' => 'Internet of Things (IoT)',
                'slug' => 'internet-of-things-iot',
            ],
            [
                'name' => 'Software Architecting',
                'slug' => 'software-architecting',
            ],
            [
                'name' => 'Business Consultation',
                'slug' => 'business-consultation',
            ],
        ];

        foreach ($datas as $data) {
            Category::firstOrCreate($data);
        }
    }
}
