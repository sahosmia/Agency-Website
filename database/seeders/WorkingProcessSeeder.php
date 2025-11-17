<?php

namespace Database\Seeders;

use App\Models\WorkingProcess;
use Illuminate\Database\Seeder;

class WorkingProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => 'Send email or Order place',
                'description' => 'Reach out to us via email or place your order through our website. Share your project details and goals to get started.',
                'icon' => 'discovery.svg',
            ],
            [
                'title' => 'Meet online',
                'description' => 'We’ll schedule a convenient online meeting to discuss your requirements, vision, and expectations in detail.',
                'icon' => 'planning.svg',
            ],
            [
                'title' => 'Price estimation',
                'description' => 'Receive a customized price estimate tailored to your project scope and budget. Transparency is our priority.',
                'icon' => 'design.svg',
            ],
            [
                'title' => 'Work together',
                'description' => 'Once everything is aligned, we’ll begin collaborating to bring your vision to life, ensuring regular updates and smooth communication.',
                'icon' => 'development.svg',
            ],
        ];

        foreach ($datas as $data) {
            WorkingProcess::create($data);
        }
    }
}
