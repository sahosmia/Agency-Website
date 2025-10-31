<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BusinessTag;

class BusinessTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $businessTags= [
            ['name' => 'Business partner'],
            ['name' => 'Tech Partner'],
            ['name' => 'Problem Solver'],
            ['name' => 'Visionary thinker'],
            ['name' => 'Startegic Planner'],
            ['name' => 'Design Partner'],
            ['name' => 'Digital Marketer'],
            ['name' => 'Data Researcher'],
            ['name' => 'Security provider'],
        ];

        foreach ($businessTags as $tag) {
            BusinessTag::create($tag);
        }
    }
}
