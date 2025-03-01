<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What services do you offer?',
                'answer' => 'We offer web development, SEO, branding, and digital marketing services.'
            ],
            [
                'question' => 'How can I contact you?',
                'answer' => 'You can contact us via email at contact@agency.com or through our contact form.'
            ],
            [
                'question' => 'Do you provide custom software solutions?',
                'answer' => 'Yes, we build custom software tailored to your business needs.'
            ],
            [
                'question' => 'What is your pricing structure?',
                'answer' => 'Our pricing depends on project complexity. Contact us for a quote.'
            ],
            [
                'question' => 'Do you offer support after project completion?',
                'answer' => 'Yes, we offer maintenance and support services after deployment.'
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
