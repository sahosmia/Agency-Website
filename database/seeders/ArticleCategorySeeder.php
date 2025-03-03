<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'description' => 'We offer web development, SEO, branding, and digital marketing services.'
            ],
            [
                'title' => 'Mobile App Development',
                'description' => ''
            ],
            [
                'title' => 'UI/UX design',
                'description' => 'Yes, we build custom software tailored to your business needs.'
            ],
            [
                'title' => 'E-commerce Solutions',
                'description' => 'Our pricing depends on project complexity. Contact us for a quote.'
            ],
            [
                'title' => 'Social Media Marketing',
                'description' => 'Yes, we offer maintenance and support services after deployment.'
            ],
            [
                'title' => 'SEO',
                'description' => 'Yes, we offer maintenance and support services after deployment.'
            ],
            [
                'title' => 'Data Solution',
                'description' => ''
            ],
            [
                'title' => 'Artificial Intelligence',
                'description' => ''
            ],
            [
                'title' => 'Internet of Things (IoT)',
                'description' => ''
            ],
            [
                'title' => 'Software Architecting',
                'description' => ''
            ],
            [
                'title' => 'Business Consultation',
                'description' => ''
            ],
        ];

        foreach ($datas as $data) {
            ArticleCategory::create($data);
        }
    }
}
