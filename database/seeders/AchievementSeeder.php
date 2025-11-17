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
            'title' => 'Satisfied Customers',
            'description' => 'We are committed to providing the best solutions to build happy relationships with our customers.',
            'value' => '95%',
            'home_page_show' => true,
            'sort' => 1,
        ]);

        Achievement::updateOrCreate(['id' => 2], [
            'title' => 'Projects Completed',
            'description' => 'Consistently innovating and delivering excellence.',
            'value' => '80+',
            'home_page_show' => true,
            'sort' => 2,
        ]);

        Achievement::updateOrCreate(['id' => 3], [
            'title' => 'Industries Served',
            'description' => 'Expertise tailored to your unique needs—because we’ve done it all.',
            'value' => '17+',
            'home_page_show' => true,
            'sort' => 3,
        ]);

        Achievement::updateOrCreate(['id' => 4], [
            'title' => 'Expert Team',
            'description' => 'We have a team of experts who are dedicated to providing the best solutions.',
            'value' => '20%',
            'home_page_show' => false,
            'sort' => 4,
        ]);
    }
}
