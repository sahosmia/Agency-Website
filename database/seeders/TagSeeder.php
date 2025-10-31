<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Digital Marketing'],
            ['name' => 'Marketing Strategy'],
            ['name' => 'Email Campaigns'],
            ['name' => 'Boost Engagement'],
            ['name' => 'IncreaseConversions'],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
