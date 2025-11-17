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
                'name' => 'Web Design & Development',
                'slug' => 'web-design-&-development',
                'image' => 'service/service-1.jpg',
                'is_active' => true,
                'meta_title' => 'Web Design & Development',
                'meta_description' => 'We create visually stunning and responsive websites tailored to your brand, ensuring seamless user experiences and high performance across all devices.',
            ],
            [
                'name' => 'Mobile App Development ',
                'slug' => 'mobile-app-development',
                'image' => 'service/service-2.jpg',
                'is_active' => true,
                'meta_title' => 'Mobile App Development ',
                'meta_description' => 'From concept to deployment, we design and develop intuitive mobile applications for iOS and Android, tailored to your business goals.',
            ],
            [
                'name' => 'UX/UI Design ',
                'slug' => 'ux-ui-design ',
                'image' => 'service/service-3.jpg',
                'is_active' => true,
                'meta_title' => 'UX/UI Design ',
                'meta_description' => 'We craft user-centered designs that are both functional and aesthetically pleasing, enhancing usability and engagement for your digital products.',
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
