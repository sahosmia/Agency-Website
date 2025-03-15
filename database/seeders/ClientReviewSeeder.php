<?php

namespace Database\Seeders;

use App\Models\ClientReview;
use Illuminate\Database\Seeder;

class ClientReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'John Doe',
                'designation' => 'CEO, Tech Solutions',
                'avatar' => 'avatars/john_doe.jpg',
                'rating' => '5',
                'review' => 'Excellent service! The team was highly professional and delivered beyond expectations.'
            ],
            [
                'name' => 'Sarah Smith',
                'designation' => 'Marketing Manager, Bright Ads',
                'avatar' => 'avatars/sarah_smith.jpg',
                'rating' => '4.5',
                'review' => 'Great experience! Very responsive and dedicated to quality work.'
            ],
            [
                'name' => 'Michael Johnson',
                'designation' => 'CTO, InnovateX',
                'avatar' => 'avatars/michael_johnson.jpg',
                'rating' => '4',
                'review' => 'Good service overall. There were some minor issues, but they were resolved quickly.'
            ],
            [
                'name' => 'Emily Davis',
                'designation' => 'Founder, Creative Minds',
                'avatar' => 'avatars/emily_davis.jpg',
                'rating' => '5',
                'review' => 'Outstanding work! Highly recommended for anyone looking for top-notch services.'
            ],
            [
                'name' => 'David Brown',
                'designation' => 'Project Manager, WebTech',
                'avatar' => 'avatars/david_brown.jpg',
                'rating' => '4.8',
                'review' => 'Very professional and delivered the project on time. Will work with them again!'
            ]
        ];

        foreach ($datas as $data) {
            ClientReview::create($data);
        }
    }
}
