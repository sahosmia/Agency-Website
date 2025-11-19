<?php

namespace Database\Seeders;

use App\Models\Reviewer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class ReviewerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviewers')->delete();

        $reviewers = [
            [
                'name' => 'Clutch',
                'rating' => 5,
                'image' => 'Clutch.png',
            ],
            [
                'name' => 'Trustpilot',
                'rating' => 4,
                'image' => 'Trustpilot.png',
            ],
            [
                'name' => 'Upwork',
                'rating' => 5,
                'image' => 'Upwork.png',
            ],
            [
                'name' => 'Google',
                'rating' => 3,
                'image' => 'Google.png',
            ],
        ];

        foreach ($reviewers as $reviewerData) {
            Reviewer::create($reviewerData);
        }
    }
}




