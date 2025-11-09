<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class VacancySeeder extends Seeder
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
                'title' => 'Senior Laravel Developer',
                'slug' => Str::slug('Senior Laravel Developer'),
                'type' => 'Full-time',
                'location' => 'Remote',
                'end_date' => Carbon::now()->addDays(30)->toDateString(),
                'benefits' => ['Health insurance, Paid leave'],
                'responsibilities' => ['Develop and maintain Laravel applications.'],
                'requirements' => ['5+ years experience with Laravel.'],
                'skills_required' => ['PHP', 'Laravel', 'MySQL', 'REST API'],
                'weekly_holidays' => 'Saturday, Sunday',
                'salary' => '25,000-30,000 BDT(Negotiable)',
                'others' => 'Flexible work hours',
                'is_active' => true,
            ],
            [
                'title' => 'Junior Frontend Developer',
                'slug' => Str::slug('Junior Frontend Developer'),
                'type' => 'Part-time',
                'location' => 'On-site',
                'end_date' => Carbon::now()->addDays(45)->toDateString(),
                'benefits' => ['Yearly bonus'],
                'responsibilities' => ['Work on React and Vue.js projects.'],
                'requirements' => ['Basic experience with HTML, CSS, and JavaScript.'],
                'skills_required' => ['React', 'Vue.js', 'Tailwind CSS'],
                'weekly_holidays' => 'Friday',
                'salary' => '40000',
                'others' => 'Great learning opportunity',
                'is_active' => true,
            ],
        ];

        foreach($datas as $data) {
            Vacancy::firstOrCreate(
                ['slug' => $data['slug']],
                array_merge($data, [
                    'category_id' => $categories->random(),
                ])
            );
        }
    }
}
