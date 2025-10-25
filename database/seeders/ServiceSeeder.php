<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Custom Website Design',
                'slug' => 'custom-website-design',
                'service_category_id' => 1,
                'image' => 'service/service-1.jpg',
            ],
            [
                'name' => 'Custom Website Development',
                'slug' => 'custom-website-development',
                'service_category_id' => 1,
                'image' => 'service/service-2.jpg',
            ],
            [
                'name' => 'Landing Page Design',
                'slug' => 'landing-page-design',
                'service_category_id' => 1,
                'image' => 'service/service-3.jpg',
            ],
            [
                'name' => 'Website Maintenance and Support',
                'slug' => 'website-maintenance-and-support',
                'service_category_id' => 1,
                'image' => 'service/service-4.jpg',
            ],
        ];

        foreach ($datas as $data) {
            Service::create($data);
        }
    }
}
