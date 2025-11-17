<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Service;
use App\Models\Software;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pageFaqs = [
            'home' => [
                [
                    'question' => 'What services does your company offer?',
                    'answer' => 'We provide a range of digital solutions, including Web Design & Development, Mobile App Development, UX/UI Design, Digital Marketing, Cyber Security, and more.',
                    'is_active' => true,
                ],
                [
                    'question' => 'What industries do you specialize in?',
                    'answer' => 'We have experience working with various industries such as Healthcare, Finance, E-commerce, Education, and others.',
                    'is_active' => true,
                ],
                [
                    'question' => 'Do you work with international clients?',
                    'answer' => 'We have experience working with various industries such as Healthcare, Finance, E-commerce, Education, and others.',
                    'is_active' => true,
                ],
                [
                    'question' => 'What makes your company stand out?',
                    'answer' => 'We have experience working with various industries such as Healthcare, Finance, E-commerce, Education, and others.',
                    'is_active' => true,
                ],
                [
                    'question' => 'Do you provide support after project completion?',
                    'answer' => 'We have experience working with various industries such as Healthcare, Finance, E-commerce, Education, and others.',
                    'is_active' => true,
                ],
                [
                    'question' => 'How can I get started with your services?',
                    'answer' => 'We have experience working with various industries such as Healthcare, Finance, E-commerce, Education, and others.',
                    'is_active' => true,
                ],
            ],
            'about' => [
                [
                    'question' => 'What is your company mission?',
                    'answer' => 'Our mission is to empower businesses with innovative and effective digital solutions.',
                    'is_active' => true,
                ],
            ],
            'service' => [
                [
                    'question' => 'Do you provide support after project completion?',
                    'answer' => 'Absolutely! We offer ongoing support and maintenance services to ensure your solutions remain effective.',
                    'is_active' => true,
                ],
            ],
            'software' => [
                [
                    'question' => 'Do you work with international clients?',
                    'answer' => 'Yes, we collaborate with clients from around the world to deliver high-quality digital solutions.',
                    'is_active' => true,
                ],
            ],
        ];

        foreach ($pageFaqs as $page => $faqs) {
            foreach ($faqs as $faq) {
                Faq::updateOrCreate(
                    ['question' => $faq['question'], 'page' => $page],
                    $faq
                );
            }
        }

        $service = Service::first();
        if ($service) {
            $serviceFaqs = [
                [
                    'question' => 'How can I get started with your services?',
                    'answer' => 'You can reach out to us via our contact page to discuss your project requirements.',
                    'is_active' => true,
                ],
            ];

            foreach ($serviceFaqs as $faq) {
                $service->faqs()->updateOrCreate(
                    ['question' => $faq['question']],
                    $faq
                );
            }
        }

        $software = Software::first();
        if ($software) {
            $softwareFaqs = [
                [
                    'question' => 'What makes your company stand out?',
                    'answer' => 'Our commitment to quality, customer satisfaction, and innovative solutions sets us apart in the industry.',
                    'is_active' => false,
                ],
            ];

            foreach ($softwareFaqs as $faq) {
                $software->faqs()->updateOrCreate(
                    ['question' => $faq['question']],
                    $faq
                );
            }
        }
    }
}
