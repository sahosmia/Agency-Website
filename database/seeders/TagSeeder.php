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
            ['name' => 'Technology'],
            ['name' => 'Programming'],
            ['name' => 'Web Development'],
            ['name' => 'Design'],
            ['name' => 'Lifestyle'],
            ['name' => 'Travel'],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
