<?php

namespace Database\Seeders;

use App\Models\ClientReview;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ProjectCategory::pluck('id');
        if ($categories->isEmpty()) {
            $this->call(ProjectCategorySeeder::class);
            $categories = ProjectCategory::pluck('id');
        }

        $reviews = ClientReview::pluck('id');
        if ($reviews->isEmpty()) {
            $this->call(ClientReviewSeeder::class);
            $reviews = ClientReview::pluck('id');
        }

        $datas = [
            [
                'title' => 'E-Commerce Website',
                'slug' => 'e-commerce-website',
                'thumbnail' => 'ecommerce.png',
                'live_preview_link' => 'https://example.com/ecommerce',
                'short_text' => 'An online shopping platform with seamless user experience.',
                'project_overview' => '<p>This project involved developing a scalable e-commerce platform.</p>
                               <ul>
                                   <li>Integrated secure payment gateways</li>
                                   <li>Implemented real-time order tracking</li>
                                   <li>Optimized for mobile and tablet users</li>
                               </ul>',
                'problem' => '<p>The client needed a high-performance and secure platform for large-scale transactions.</p>',
                'challenge' => '<p>Ensuring smooth checkout and real-time inventory updates.</p>',
                'workflow_scenario' => '<p>Our workflow included:</p>
                                <ul>
                                    <li>UI/UX design in Figma</li>
                                    <li>Development using Laravel and Vue.js</li>
                                    <li>Testing and deployment on AWS</li>
                                </ul>',
                'solutions' => '<p>We implemented:</p>
                        <ul>
                            <li><strong>Optimized database queries</strong> for faster performance</li>
                            <li><strong>JWT authentication</strong> for security</li>
                            <li><strong>Stripe integration</strong> for smooth payments</li>
                        </ul>',
                'screenshots' => ['ecommerce_1.png', 'ecommerce_2.png', 'ecommerce_3.png'],
                'images' => ['ecommerce_1.png', 'ecommerce_2.png', 'ecommerce_3.png', 'ecommerce_4.png'],
                'thumbnails' => ['ecommerce_1.png', 'ecommerce_2.png', 'ecommerce_3.png', 'ecommerce_4.png'],
                'is_active' => true,
                'meta_title' => 'E-Commerce Website',
                'meta_description' => 'An online shopping platform with seamless user experience.',
            ],
            [
                'title' => 'Portfolio Website',
                'slug' => 'portfolio-website',
                'thumbnail' => 'portfolio_website.png',
                'live_preview_link' => 'https://example.com/portfolio',
                'short_text' => 'A modern portfolio website for showcasing work and skills.',
                'project_overview' => '<p>This project involved developing a scalable e-commerce platform.</p>
                               <ul>
                                   <li>Integrated secure payment gateways</li>
                                   <li>Implemented real-time order tracking</li>
                                   <li>Optimized for mobile and tablet users</li>
                               </ul>',
                'problem' => '<p>The client needed a high-performance and secure platform for large-scale transactions.</p>',
                'challenge' => '<p>Ensuring smooth checkout and real-time inventory updates.</p>',
                'workflow_scenario' => '<p>Our workflow included:</p>
                                <ul>
                                    <li>UI/UX design in Figma</li>
                                    <li>Development using Laravel and Vue.js</li>
                                    <li>Testing and deployment on AWS</li>
                                </ul>',
                'solutions' => '<p>We implemented:</p>
                        <ul>
                            <li><strong>Optimized database queries</strong> for faster performance</li>
                            <li><strong>JWT authentication</strong> for security</li>
                            <li><strong>Stripe integration</strong> for smooth payments</li>
                        </ul>',
                'screenshots' => ['portfolio_website_1.png', 'portfolio_website_2.png', 'portfolio_website_3.png'],
                'images' => ['portfolio_website_1.png', 'portfolio_website_2.png', 'portfolio_website_3.png', 'portfolio_website_4.png'],
                'thumbnails' => ['portfolio_website_1.png', 'portfolio_website_2.png', 'portfolio_website_3.png', 'portfolio_website_4.png'],
                'is_active' => true,
                'meta_title' => 'Portfolio Website',
                'meta_description' => 'A modern portfolio website for showcasing work and skills.',
            ],
            [
                'title' => 'SaaS Dashboard',
                'slug' => 'saas-dashboard',
                'thumbnail' => 'saas_dashboard.png',
                'live_preview_link' => 'https://example.com/saas',
                'short_text' => 'A cloud-based analytics dashboard for businesses.',
                'project_overview' => '<p>This project involved developing a scalable e-commerce platform.</p>
                               <ul>
                                   <li>Integrated secure payment gateways</li>
                                   <li>Implemented real-time order tracking</li>
                                   <li>Optimized for mobile and tablet users</li>
                               </ul>',
                'problem' => '<p>The client needed a high-performance and secure platform for large-scale transactions.</p>',
                'challenge' => '<p>Ensuring smooth checkout and real-time inventory updates.</p>',
                'workflow_scenario' => '<p>Our workflow included:</p>
                                <ul>
                                    <li>UI/UX design in Figma</li>
                                    <li>Development using Laravel and Vue.js</li>
                                    <li>Testing and deployment on AWS</li>
                                </ul>',
                'solutions' => '<p>We implemented:</p>
                        <ul>
                            <li><strong>Optimized database queries</strong> for faster performance</li>
                            <li><strong>JWT authentication</strong> for security</li>
                            <li><strong>Stripe integration</strong> for smooth payments</li>
                        </ul>',
                'screenshots' => ['saas_dashboard_1.png', 'saas_dashboard_2.png', 'saas_dashboard_3.png'],
                'images' => ['saas_dashboard_1.png', 'saas_dashboard_2.png', 'saas_dashboard_3.png', 'saas_dashboard_4.png'],
                'thumbnails' => ['saas_dashboard_1.png', 'saas_dashboard_2.png', 'saas_dashboard_3.png', 'saas_dashboard_4.png'],
                'is_active' => true,
                'meta_title' => 'SaaS Dashboard',
                'meta_description' => 'A cloud-based analytics dashboard for businesses.',
            ],
        ];

        foreach ($datas as $data) {
            Project::create(array_merge($data, [
                'project_category_id' => $categories->random(),
                'client_review_id' => $reviews->random(),
            ]));
        }
    }
}
