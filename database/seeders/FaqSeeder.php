<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $commonFaqs = [
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
        ];

        foreach ($commonFaqs as $faq) {
            Faq::create($faq);
        }

        $service = Service::first();
        if ($service) {
            $serviceFaqs = [
                [
                    'question' => 'Do you provide support after project completion?',
                    'answer' => 'Absolutely! We offer ongoing support and maintenance services to ensure your solutions remain effective.',
                    'is_active' => true,
                ],
                [
                    'question' => 'How can I get started with your services?',
                    'answer' => 'You can reach out to us via our contact page to discuss your project requirements.',
                    'is_active' => true,
                ],
            ];

            foreach ($serviceFaqs as $faq) {
                $service->faqs()->create($faq);
            }
        }

        $project = Project::first();
        if ($project) {
            $projectFaqs = [
                [
                    'question' => 'Do you work with international clients?',
                    'answer' => 'Yes, we collaborate with clients from around the world to deliver high-quality digital solutions.',
                    'is_active' => true,
                ],
                [
                    'question' => 'What makes your company stand out?',
                    'answer' => 'Our commitment to quality, customer satisfaction, and innovative solutions sets us apart in the industry.',
                    'is_active' => false,
                ],
            ];

            foreach ($projectFaqs as $faq) {
                $project->faqs()->create($faq);
            }
        }
    }
}
