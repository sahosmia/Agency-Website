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
                'title' => 'Discovery',
                'description' => 'We start by understanding your business goals and project requirements.',
                'icon' => 'discovery.svg',
            ],
            [
                'title' => 'Planning',
                'description' => 'We create a detailed project plan and timeline.',
                'icon' => 'planning.svg',
            ],
            [
                'title' => 'Design',
                'description' => 'We design a user-friendly and visually appealing interface.',
                'icon' => 'design.svg',
            ],
            [
                'title' => 'Development',
                'description' => 'We build and test your application to ensure it meets the highest standards.',
                'icon' => 'development.svg',
            ],
        ];

        foreach ($datas as $data) {
            WorkingProcess::create($data);
        }
    }
}
