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
                'image' => 'service (1).png',
                'description' => 'We offer bespoke website design services tailored to your brand identity and business goals.',
                'is_active' => true,
                'meta_title' => 'Web Design & Development',
                'meta_description' => 'We create visually stunning and responsive websites tailored to your brand, ensuring seamless user experiences and high performance across all devices.',
            ],
            [
                'name' => 'Custom Website Development',
                'slug' => 'custom-website-development',
                'description' => 'Our team specializes in developing custom websites that are scalable, secure, and optimized for performance.',
                'image' => 'service (2).png',
                'is_active' => true,
                'meta_title' => 'Mobile App Development ',
                'meta_description' => 'From concept to deployment, we design and develop intuitive mobile applications for iOS and Android, tailored to your business goals.',
            ],
            [
                'name' => 'Landing Page Design',
                'slug' => 'landing-page-design',
                'description' => 'We create high-converting landing pages designed to capture leads and drive sales for your marketing campaigns.',
                'image' => 'service (3).png',
                'is_active' => true,
                'meta_title' => 'UX/UI Design ',
                'meta_description' => 'We craft user-centered designs that are both functional and aesthetically pleasing, enhancing usability and engagement for your digital products.',
            ],
            [
                'name' => 'Website Maintenance and Support',
                'slug' => 'website-maintenance-and-support',
                'description' => 'Our maintenance and support services ensure your website remains up-to-date, secure, and running smoothly.',
                'image' => 'service (4).png',
                'is_active' => true,
                'meta_title' => 'Website Maintenance and Support',
                'meta_description' => 'Website Maintenance and Support',
            ],

            // make more 13 sercies
            [
                'name' => 'E-commerce Website Development',
                'slug' => 'ecommerce-website-development',
                'description' => 'We build robust e-commerce platforms that provide seamless shopping experiences and drive online sales.',
                'image' => 'service (5).png',
                'is_active' => true,
                'meta_title' => 'E-commerce Website Development',
                'meta_description' => 'E-commerce Website Development',
            ],
            [
                'name' => 'Responsive Web Design',
                'slug' => 'responsive-web-design',
                'description' => 'Our responsive web designs ensure your website looks and functions perfectly on all devices.',
                'image' => 'service (6).png',
                'is_active' => true,
                'meta_title' => 'Responsive Web Design',
                'meta_description' => 'Responsive Web Design',
            ],
            [
                'name' => 'Content Management System (CMS) Development',
                'slug' => 'content-management-system-development',
                'description' => 'We develop user-friendly CMS solutions that allow you to easily manage and update your website content.',
                'image' => 'service (7).png',
                'is_active' => true,
                'meta_title' => 'Content Management System (CMS) Development',
                'meta_description' => 'Content Management System (CMS) Development',
            ],
            [
                'name' => 'Search Engine Optimization (SEO)',
                'slug' => 'search-engine-optimization-seo',
                'description' => 'Our SEO services help improve your website\'s visibility and ranking on search engines.',
                'image' => 'service (8).png',
                'is_active' => true,
                'meta_title' => 'Search Engine Optimization (SEO)',
                'meta_description' => 'Search Engine Optimization (SEO)',
            ],
            [
                'name' => 'Website Redesign Services',
                'slug' => 'website-redesign-services',
                'description' => 'We offer website redesign services to refresh your online presence and enhance user experience.',
                'image' => 'service (9).png',
                'is_active' => true,
                'meta_title' => 'Website Redesign Services',
                'meta_description' => 'Website Redesign Services',
            ],
            [
                'name' => 'Web Application Development',
                'slug' => 'web-application-development',
                'description' => 'Our team develops custom web applications tailored to your business needs and objectives.',
                'image' => 'service (10).png',
                'is_active' => true,
                'meta_title' => 'Web Application Development',
                'meta_description' => 'Web Application Development',
            ],
            [
                'name' => 'UI/UX Design Services',
                'slug' => 'ui-ux-design-services',
                'description' => 'We provide UI/UX design services to create intuitive and engaging digital experiences.',
                'image' => 'service (11).png',
                'is_active' => true,
                'meta_title' => 'UI/UX Design Services',
                'meta_description' => 'UI/UX Design Services',
            ],
            [
                'name' => 'Website Hosting Solutions',
                'slug' => 'website-hosting-solutions',
                'description' => 'We offer reliable website hosting solutions to ensure your site is always accessible and performs optimally.',
                'image' => 'service (12).png',
                'is_active' => true,
                'meta_title' => 'Website Hosting Solutions',
                'meta_description' => 'Website Hosting Solutions',
            ],
            [
                'name' => 'Performance Optimization Services',
                'slug' => 'performance-optimization-services',
                'description' => 'Our performance optimization services enhance your website\'s speed and overall user experience.',
                'image' => 'service (13).png',
                'is_active' => true,
                'meta_title' => 'Performance Optimization Services',
                'meta_description' => 'Performance Optimization Services',
            ],
            [
                'name' => 'Security Enhancement Services',
                'slug' => 'security-enhancement-services',
                'description' => 'We provide security enhancement services to protect your website from threats and vulnerabilities.',
                'image' => 'service (14).png',
                'is_active' => true,
                'meta_title' => 'Security Enhancement Services',
                'meta_description' => 'Security Enhancement Services',
            ],
            [
                'name' => 'API Integration Services',
                'slug' => 'api-integration-services',
                'description' => 'Our API integration services connect your website with third-party applications for enhanced functionality.',
                'image' => 'service (15).png',
                'is_active' => true,
                'meta_title' => 'API Integration Services',
                'meta_description' => 'API Integration Services',
            ],
            [
                'name' => 'Mobile-Friendly Website Development',
                'slug' => 'mobile-friendly-website-development',
                'description' => 'We specialize in developing mobile-friendly websites that provide optimal user experiences on smartphones and tablets.',
                'image' => 'service (16).png',
                'is_active' => true,
                'meta_title' => 'Mobile-Friendly Website Development',
                'meta_description' => 'Mobile-Friendly Website Development',
            ],
            [
                'name' => 'Website Analytics and Reporting',
                'slug' => 'website-analytics-and-reporting',
                'description' => 'Our website analytics and reporting services help you track performance and make data-driven decisions.',
                'image' => 'service (17).png',
                'is_active' => true,
                'meta_title' => 'Website Analytics and Reporting',
                'meta_description' => 'Website Analytics and Reporting',
            ]
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
