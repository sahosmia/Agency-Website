<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vacancy::insert([
            [
                'title' => 'Senior Laravel Developer',
                'slug' => Str::slug('Senior Laravel Developer'),
                'type' => 'Full-time',
                'location' => 'Remote',
                'end_date' => Carbon::now()->addDays(30)->toDateString(),
                'benefits' => 'Health insurance, Paid leave',
                'responsibilities' => 'Develop and maintain Laravel applications.',
                'requirements' => '5+ years experience with Laravel.',
                'skills_required' => 'PHP, Laravel, MySQL, JavaScript',
                'weekly_holidays' => 'Saturday, Sunday',
                'salary' => '80000',
                'others' => 'Flexible work hours',
                'vacancy_category_id' => 1, // Ensure this category exists in vacancy_categories
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Junior Frontend Developer',
                'slug' => Str::slug('Junior Frontend Developer'),
                'type' => 'Part-time',
                'location' => 'On-site',
                'end_date' => Carbon::now()->addDays(45)->toDateString(),
                'benefits' => 'Yearly bonus',
                'responsibilities' => 'Work on React and Vue.js projects.',
                'requirements' => 'Basic experience with HTML, CSS, and JavaScript.',
                'skills_required' => 'React, Vue.js, Tailwind CSS',
                'weekly_holidays' => 'Friday',
                'salary' => '40000',
                'others' => 'Great learning opportunity',
                'vacancy_category_id' => 2, // Ensure this category exists in vacancy_categories
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
