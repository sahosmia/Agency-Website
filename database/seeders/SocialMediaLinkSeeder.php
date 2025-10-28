<?php

namespace Database\Seeders;

use App\Models\SocialMediaLink;
use Illuminate\Database\Seeder;

class SocialMediaLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Facebook',
                'url' => 'https://facebook.com',
                'icon' => 'facebook.png',
            ],
            [
                'name' => 'Twitter',
                'url' => 'https://twitter.com',
                'icon' => 'twitter.png',
            ],
            [
                'name' => 'Instagram',
                'url' => 'https://instagram.com',
                'icon' => 'instagram.png',
            ],
            [
                'name' => 'LinkedIn',
                'url' => 'https://linkedin.com',
                'icon' => 'linkedin.png',
            ],
        ];

        foreach ($datas as $data) {
            SocialMediaLink::create($data);
        }
    }
}
