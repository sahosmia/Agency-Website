<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Achievement::updateOrCreate(['id' => 1], [
            'title' => 'Projects Done',
            'description' => 'We have successfully completed over 100 projects for our clients.',
            'value' => '20%',
            'home_page_show' => true,
            'sort' => 1,
        ]);

        Achievement::updateOrCreate(['id' => 2], [
            'title' => 'Happy Clients',
            'description' => 'We have a long list of happy clients who are satisfied with our work.',
            'value' => '20%',
            'home_page_show' => true,
            'sort' => 2,
        ]);

        Achievement::updateOrCreate(['id' => 3], [
            'title' => 'Years of Experience',
            'description' => 'We have over 10 years of experience in the industry.',
            'value' => '20%',
            'home_page_show' => true,
            'sort' => 3,
        ]);

        Achievement::updateOrCreate(['id' => 4], [
            'title' => 'Expert Team',
            'description' => 'We have a team of experts who are dedicated to providing the best solutions.',
            'value' => '20%',
            'home_page_show' => true,
            'sort' => 4,
        ]);
    }
}
