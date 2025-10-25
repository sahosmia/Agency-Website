<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ServiceCategory::pluck('id');
        if ($categories->isEmpty()) {
            $this->call(ServiceCategorySeeder::class);
            $categories = ServiceCategory::pluck('id');
        }

        $datas = [
            [
                'name' => 'Custom Website Design',
                'slug' => 'custom-website-design',
                'image' => 'service/service-1.jpg',
            ],
            [
                'name' => 'Custom Website Development',
                'slug' => 'custom-website-development',
                'image' => 'service/service-2.jpg',
            ],
            [
                'name' => 'Landing Page Design',
                'slug' => 'landing-page-design',
                'image' => 'service/service-3.jpg',
            ],
            [
                'name' => 'Website Maintenance and Support',
                'slug' => 'website-maintenance-and-support',
                'image' => 'service/service-4.jpg',
            ],
        ];

        foreach ($datas as $data) {
            Service::create(array_merge($data, [
                'service_category_id' => $categories->random(),
            ]));
        }
    }
}
