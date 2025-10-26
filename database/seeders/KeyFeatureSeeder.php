<?php

namespace Database\Seeders;

use App\Models\KeyFeature;
use App\Models\Service;
use App\Models\Software;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeyFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $keyFeatures = [
            [
                'name' => 'Responsive Design',
                'description' => 'Our websites adjust seamlessly to all devices, delivering a consistent and optimized user experience across desktops, tablets, and smartphones.',
                'image' => 'responsive-design.jpg',
            ],
            [
                'name' => 'Fast Load Speed',
                'description' => 'We optimize images, leverage browser caching, and minify CSS, JavaScript, and HTML to deliver a lightning-fast user experience.',
                'image' => 'fast-load-speed.jpg',
            ],
            [
                'name' => 'Advanced Security',
                'description' => 'We implement security best practices, including SSL certificates, secure authentication, and protection against common vulnerabilities.',
                'image' => 'advanced-security.jpg',
            ],
            [
                'name' => 'Customizable CMS',
                'description' => 'Our websites are built on a customizable content management system that allows you to easily update your website content.',
                'image' => 'customizable-cms.jpg',
            ],
            [
                'name' => 'Integrated Analytics',
                'description' => 'We integrate Google Analytics to provide you with valuable insights into your website traffic and user behavior.',
                'image' => 'integrated-analytics.jpg',
            ],
        ];

        foreach ($keyFeatures as $keyFeature) {
            KeyFeature::updateOrCreate(['name' => $keyFeature['name']], $keyFeature);
        }

        $services = Service::all();
        $softwares = Software::all();
        $keyFeatures = KeyFeature::pluck('id');

        foreach ($services as $service) {
            $service->keyFeatures()->sync($keyFeatures->random(rand(2, 4)));
        }

        foreach ($softwares as $software) {
            $software->keyFeatures()->sync($keyFeatures->random(rand(2, 4)));
        }
    }
}
