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
                'benefits' => json_encode(['Health insurance, Paid leave']),
                'responsibilities' => json_encode(['Develop and maintain Laravel applications.']),
                'requirements' => json_encode(['5+ years experience with Laravel.']),
                'skills_required' => json_encode(['PHP', 'Laravel', 'MySQL', 'REST API']),
                'weekly_holidays' => 'Saturday, Sunday',
                'salary' => '25,000-30,000 BDT(Negotiable)',
                'others' => 'Flexible work hours',
                'vacancy_category_id' => 1, // Ensure this category exists in vacancy_categories

            ],
            [
                'title' => 'Junior Frontend Developer',
                'slug' => Str::slug('Junior Frontend Developer'),
                'type' => 'Part-time',
                'location' => 'On-site',
                'end_date' => Carbon::now()->addDays(45)->toDateString(),
                'benefits' => json_encode(['Yearly bonus']),
                'responsibilities' => json_encode(['Work on React and Vue.js projects.']),
                'requirements' => json_encode(['Basic experience with HTML, CSS, and JavaScript.']),
                'skills_required' => json_encode(['React', 'Vue.js', 'Tailwind CSS']),
                'weekly_holidays' => 'Friday',
                'salary' => '40000',
                'others' => 'Great learning opportunity',
                'vacancy_category_id' => 2, // Ensure this category exists in vacancy_categories

            ]
        ]);
    }
}
