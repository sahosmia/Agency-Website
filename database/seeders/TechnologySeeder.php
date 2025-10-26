<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Software;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            [
                'name' => 'Front-End Development',
                'description' => 'HTML, CSS, JavaScript: Core technologies for responsive and engaging designs. Frameworks: React.js, Angular, and Vue.js for creating dynamic user interfaces.',
                'image' => 'frontend.jpg',
            ],
            [
                'name' => 'Back-End Development',
                'description' => 'Programming Languages: Node.js, Python, PHP, Ruby on Rails for server-side logic. Databases: MySQL, PostgreSQL, MongoDB for secure and efficient data storage.',
                'image' => 'backend.jpg',
            ],
            [
                'name' => 'Content Management Systems (CMS)',
                'description' => 'WordPress, Drupal, and Joomla for easy content management and updates.',
                'image' => 'cms.jpg',
            ],
            [
                'name' => 'Hosting and Deployment',
                'description' => 'AWS, Google Cloud, and Microsoft Azure for reliable and scalable hosting. Docker and Kubernetes for seamless deployment and scalability.',
                'image' => 'hosting.jpg',
            ],
            [
                'name' => 'SEO Tools and Integration',
                'description' => 'Yoast SEO, Ahrefs, and SEMrush for search engine optimization and analytics.',
                'image' => 'seo.jpg',
            ],
            [
                'name' => 'Analytics and Tracking',
                'description' => 'Google Analytics, Hotjar, and Mixpanel for real-time tracking and user behavior analysis.',
                'image' => 'analytics.jpg',
            ],
        ];

        foreach ($technologies as $technology) {
            Technology::updateOrCreate(['name' => $technology['name']], $technology);
        }

        $services = Service::all();
        $softwares = Software::all();
        $technologies = Technology::pluck('id');

        foreach ($services as $service) {
            $service->technologies()->sync($technologies->random(rand(2, 4)));
        }

        foreach ($softwares as $software) {
            $software->technologies()->sync($technologies->random(rand(2, 4)));
        }
    }
}
