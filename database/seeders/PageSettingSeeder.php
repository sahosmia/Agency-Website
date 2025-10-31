<?php

namespace Database\Seeders;

use App\Models\PageSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'page_name' => 'about',
                'settings' => [
                    'page_title' => 'About Us',
                    'about_us_title' => 'About Us',
                    'about_us_description' => 'We are a team of passionate individuals who are dedicated to providing the best services to our clients. We have been in the industry for over a decade and have helped many businesses grow. Our team is composed of experienced professionals who are experts in their respective fields. We are committed to providing our clients with the best possible experience and helping them achieve their goals.',
                    'about_us_image' => 'uploads/about/about-us.jpg',
                    'achievement_title' => 'Our Achievements',
                    'achievement_description' => 'We are proud of our achievements and have been recognized by many for our hard work and dedication. We have won several awards for our services and have been featured in many publications. We are grateful for the recognition and will continue to work hard to provide the best services to our clients.',
                    'achievement_one_title' => 'Projects Completed',
                    'achievement_one_value' => '1,200+',
                    'achievement_two_title' => 'Happy Clients',
                    'achievement_two_value' => '1,000+',
                    'achievement_three_title' => 'Years of Experience',
                    'achievement_three_value' => '10+',
                    'journey_title' => 'Our Journey',
                    'journey_description' => 'Our journey started in 2010 when we decided to start our own business. We started small and have grown over the years. We have faced many challenges along the way but have always managed to overcome them. We are proud of how far we have come and are excited about what the future holds.',
                    'journey_one_title' => '2010',
                    'journey_one_description' => 'We started our business with a small team of 5 people. We had a small office and a big dream. We worked hard and were determined to succeed.',
                    'journey_two_title' => '2015',
                    'journey_two_description' => 'We had grown to a team of 20 people and had moved to a bigger office. We had also expanded our services and were working with clients from all over the world.',
                    'journey_three_title' => '2020',
                    'journey_three_description' => 'We had become a well-known name in the industry and had a team of 50 people. We had also won several awards for our services and were featured in many publications.',
                    'team_title' => 'Our Team',
                ],
            ],
            [
                'page_name' => 'home',
                'settings' => [
                    'page_title' => 'Home',
                    'hero_title' => 'Welcome to our website',
                    'hero_subtitle' => 'We are a team of passionate individuals who are dedicated to providing the best services to our clients.',
                    'hero_button_text' => 'Get Started',
                    'services_title' => 'Our Services',
                    'services_description' => 'We offer a wide range of services to help you grow your business. Our services include web design, web development, digital marketing, and more.',
                    'software_title' => 'Our Software',
                    'software_description' => 'We have developed a wide range of software to help you manage your business. Our software is easy to use and can be customized to meet your specific needs.',
                    'projects_title' => 'Our Projects',
                    'projects_description' => 'We have worked on a wide range of projects for our clients. Our projects include websites, mobile apps, and more. We are proud of our work and are always looking for new challenges.',
                    'contact_title' => 'Contact Us',
                    'client_reviews_title' => 'Client Reviews',
                    'client_reviews_description' => 'Hear from our satisfied clients! Their feedback highlights our commitment to delivering exceptional digital solutions that drive results and build trust.',
                    'hero_card_description' => 'We have helped many businesses grow and have been recognized by many for our hard work and dedication.',
                    'hero_card_one_title' => 'Projects Completed',
                    'hero_card_one_value' => '1,200+',
                    'hero_card_one_description' => 'We have completed over 1,200 projects for our clients.',
                    'hero_card_two_title' => 'Happy Clients',
                    'hero_card_two_value' => '1,000+',
                    'hero_card_two_description' => 'We have over 1,000 happy clients who have been with us for years.',
                    'hero_card_three_title' => 'Years of Experience',
                    'hero_card_three_value' => '10+',
                    'hero_card_three_description' => 'We have over 10 years of experience in the industry.',
                    'search_title' => 'Search',
                    'values_title' => 'Our Values',
                    'working_process_title' => 'Our Working Process',
                    'faq_title' => 'Frequently Asked Questions',
                    'articles_title' => 'Articles',
                    'articles_description' => 'Stay informed with our expert insights! Explore articles on the latest trends, tips, and strategies in web design, digital marketing, and more.',
                ],
            ],
            [
                'page_name' => 'contact',
                'settings' => [
                    'page_title' => 'Contact Us',
                    'contact_title' => 'Contact Us',
                    'contact_description' => 'We are here to help. If you have any questions, please feel free to contact us. We will get back to you as soon as possible.',
                    'contact_email' => 'admin@example.com',
                    'contact_phone' => '+1 123 456 7890',
                    'contact_address' => '123 Main Street, Anytown, USA 12345',
                    'contact_map_iframe_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12345.678901234567!2d-74.0059413!3d40.7127837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDA3JzQ2LjAiTiA3NMKwMDAnMjEuNCJX!5e0!3m2!1sen!2sus!4v1626882650570!5m2!1sen!2sus',
                ],
            ],
            [
                'page_name' => '404',
                'settings' => [
                    'page_title' => '404 Not Found',
                    '404_title' => '404 Not Found',
                    '404_description' => 'The page you are looking for does not exist. Please check the URL and try again.',
                    '404_image' => 'uploads/404/404.png',
                ],
            ],
            [
                'page_name' => 'terms',
                'settings' => [
                    'page_title' => 'Terms & Conditions',
                    'terms_title' => 'Terms & Conditions',
                    'terms_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut aliquam aliquam, nunc nisl aliquet nisl, eget aliquam nisl nisl sit amet nisl. Sed euismod, nunc ut aliquam aliquam, nunc nisl aliquet nisl, eget aliquam nisl nisl sit amet nisl.',
                ],
            ],
            [
                'page_name' => 'privacy',
                'settings' => [
                    'page_title' => 'Privacy Policy',
                    'privacy_title' => 'Privacy Policy',
                    'privacy_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut aliquam aliquam, nunc nisl aliquet nisl, eget aliquam nisl nisl sit amet nisl. Sed euismod, nunc ut aliquam aliquam, nunc nisl aliquet nisl, eget aliquam nisl nisl sit amet nisl.',
                ],
            ],
            [
                'page_name' => 'services',
                'settings' => [
                    'page_title' => 'Services',
                    'title' => 'Our Services',
                    'description' => 'We offer a wide range of services to help you grow your business. Our services include web design, web development, digital marketing, and more.',
                ],
            ],
            [
                'page_name' => 'articles',
                'settings' => [
                    'page_title' => 'Articles',
                    'title' => 'Explore our least Articles',
                    'description' => 'where we share the latest trends, insights, and best practices in technology, digital transformation, and business solutions.',
                ],
            ],
            [
                'page_name' => 'softwares',
                'settings' => [
                    'page_title' => 'Softwares',
                    'title' => 'Our Softwares',
                    'description' => 'We have developed a wide range of software to help you manage your business. Our software is easy to use and can be customized to meet your specific needs.',
                ],
            ],
            [
                'page_name' => 'projects',
                'settings' => [
                    'page_title' => 'Projects',
                    'title' => 'Our Projects',
                    'description' => 'We have worked on a wide range of projects for our clients. Our projects include websites, mobile apps, and more. We are proud of our work and are always looking for new challenges.',
                ],
            ],
            [
                'page_name' => 'all-softwares',
                'settings' => [
                    'page_title' => 'All Softwares',
                    'title' => 'All Softwares',
                    'description' => 'We have developed a wide range of software to help you manage your business. Our software is easy to use and can be customized to meet your specific needs.',
                    'section_title' => 'Our Softwares',
                ],
            ],
            [
                'page_name' => 'custom-software',
                'settings' => [
                    'page_title' => 'Custom Software',
                    'title' => 'Custom Software',
                    'description' => 'We can develop custom software to meet your specific needs. Our team of experts will work with you to understand your requirements and develop a solution that is tailored to your business.',
                    'why_choose_title' => 'Why Choose Us',
                    'why_choose_description' => 'We have a team of experienced professionals who are experts in their respective fields. We are committed to providing our clients with the best possible experience and helping them achieve their goals.',
                    'key_features_title' => 'Key Features',
                    'plans_title' => 'Our Plans',
                    'technologies_title' => 'Technologies We Use',
                ],
            ],
            [
                'page_name' => 'lets-discuss',
                'settings' => [
                    'page_title' => "Let's Discuss",
                    'title' => "Let's Discuss",
                    'subtitle' => 'We are here to help. If you have any questions, please feel free to contact us. We will get back to you as soon as possible.',
                ],
            ],
            [
                'page_name' => 'thank-you',
                'settings' => [
                    'page_title' => 'Thank You',
                    'title' => 'Thank You',
                    'subtitle' => 'Thank you for contacting us. We will get back to you as soon as possible.',
                ],
            ],
            [
                'page_name' => 'service-plans',
                'settings' => [
                    'page_title' => 'Service Plans',
                    'title' => 'Our Service Plans',
                ],
            ],
            [
                'page_name' => 'software-plans',
                'settings' => [
                    'page_title' => 'Software Plans',
                    'title' => 'Our Software Plans',
                ],
            ],
            [
                'page_name' => 'careers',
                'settings' => [
                    'page_title' => 'Careers',
                    'title' => 'Join our team best Opportunity',
                ],
            ],
            [
                'page_name' => 'service-detail',
                'settings' => [
                    'page_title' => 'Service Detail',
                    'key_features_title' => 'Key Features',
                    'technologies_title' => 'Technologies We Use',
                    'service_plans_title' => 'Service Plans',
                ],
            ],
            [
                'page_name' => 'article-detail',
                'settings' => [
                    'page_title' => 'Article Detail',
                    'other_articles_title' => 'Other Articles',
                    'other_articles_description' => 'Read our latest articles to learn more about our services and the industry.',
                ],
            ],
            [
                'page_name' => 'software-detail',
                'settings' => [
                    'page_title' => 'Software Detail',
                    'key_features_title' => 'Key Features',
                    'technologies_title' => 'Technologies We Use',
                    'software_plans_title' => 'Software Plans',
                ],
            ],
            [
                'page_name' => 'project-detail',
                'settings' => [
                    'page_title' => 'Project Detail',
                    'client_reviews_title' => 'Client Reviews',
                    'other_projects_title' => 'Other Projects',
                    'other_projects_description' => 'We have worked on a wide range of projects for our clients. Our projects include websites, mobile apps, and more. We are proud of our work and are always looking for new challenges.',
                ],
            ],
            [
                'page_name' => 'job-apply-question',
                'settings' => [
                    'page_title' => 'Job Apply Question',
                    'title' => 'Job Apply Question',
                    'description' => 'Please answer the following questions to complete your application.',
                ],
            ],
            [
                'page_name' => 'single-software-page',
                'settings' => [
                    'page_title' => 'Single Software Page',
                    'title' => 'Single Software Page',
                    'description' => 'This is a single software page.',
                ],
            ],
            [
                'page_name' => 'single-software-plan-page',
                'settings' => [
                    'page_title' => 'Single Software Plan Page',
                    'title' => 'Single Software Plan Page',
                    'description' => 'This is a single software plan page.',
                ],
            ],
            [
                'page_name' => 'confirmation',
                'settings' => [
                    'page_title' => 'Confirmation',
                    'title' => 'Confirmation',
                    'description' => 'Your order has been confirmed.',
                ],
            ],
            [
                'page_name' => 'congratulation-page',
                'settings' => [
                    'page_title' => 'Congratulation Page',
                    'title' => 'Congratulation Page',
                    'description' => 'Congratulations! You have successfully completed the application.',
                ],
            ],
            [
                'page_name' => 'maintenance-page',
                'settings' => [
                    'page_title' => 'Maintenance Page',
                    'title' => 'Maintenance Page',
                    'description' => 'We are currently undergoing maintenance. We will be back shortly.',
                ],
            ],
            [
                'page_name' => 'our-work',
                'settings' => [
                    'page_title' => 'Our Work',
                    'title' => 'Our Work',
                    'description' => 'We have worked on a wide range of projects for our clients. Our projects include websites, mobile apps, and more. We are proud of our work and are always looking for new challenges.',
                ],
            ],
        ];

        foreach ($pages as $page) {
            PageSetting::firstOrCreate(['page_name' => $page['page_name']], $page);
        }
    }
}
