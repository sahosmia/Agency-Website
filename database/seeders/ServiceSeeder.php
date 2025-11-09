<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::pluck('id');
        if ($categories->isEmpty()) {
            $this->call(CategorySeeder::class);
            $categories = Category::pluck('id');
        }

        $datas = [
            [
                'name' => 'Custom Website Design',
                'slug' => 'custom-website-design',
                'image' => 'service/service-1.jpg',
                'is_active' => true,
                'meta_title' => 'Custom Website Design',
                'meta_description' => 'Custom Website Design',
            ],
            [
                'name' => 'Custom Website Development',
                'slug' => 'custom-website-development',
                'image' => 'service/service-2.jpg',
                'is_active' => true,
                'meta_title' => 'Custom Website Development',
                'meta_description' => 'Custom Website Development',
            ],
            [
                'name' => 'Landing Page Design',
                'slug' => 'landing-page-design',
                'image' => 'service/service-3.jpg',
                'is_active' => true,
                'meta_title' => 'Landing Page Design',
                'meta_description' => 'Landing Page Design',
            ],
            [
                'name' => 'Website Maintenance and Support',
                'slug' => 'website-maintenance-and-support',
                'image' => 'service/service-4.jpg',
                'is_active' => true,
                'meta_title' => 'Website Maintenance and Support',
                'meta_description' => 'Website Maintenance and Support',
            ],
        ];

        foreach ($datas as $data) {
            Service::firstOrCreate(
                ['slug' => $data['slug']],
                array_merge($data, [
                    'category_id' => $categories->random(),
                ])
            );
        }
    }
}
