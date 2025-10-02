<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
                'project_category_id' => 1, // Assuming category ID 1 exists
                'client_review_id' => 1, // Assuming review ID 1 exists
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
                'project_category_id' => 2, // Assuming category ID 2 exists
                'client_review_id' => 2, // Assuming review ID 2 exists
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
                'project_category_id' => 3, // Assuming category ID 3 exists
                'client_review_id' => 3, // Assuming review ID 3 exists
            ],
        ];

        foreach ($datas as $data) {
            Project::create($data);
        }
    }
}
