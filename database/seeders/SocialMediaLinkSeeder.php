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
                'name' => 'LinkedIn',
                'url' => 'https://linkedin.com',
                'icon' => 'linkedin.png',
            ],
            [
                'name' => 'Instagram',
                'url' => 'https://instagram.com',
                'icon' => 'instagram.png',
            ],
            [
                'name' => 'Twitter',
                'url' => 'https://twitter.com',
                'icon' => 'twitter.png',
            ],
            [
                'name' => 'Facebook',
                'url' => 'https://facebook.com',
                'icon' => 'facebook.png',
            ],
            [
                'name' => 'Dribble',
                'url' => 'https://dribble.com',
                'icon' => 'dribble.png',
            ],
            [
                'name' => 'Behance',
                'url' => 'https://behance.net',
                'icon' => 'behance.png',
            ],
            [
                'name' => 'Skype',
                'url' => 'https://skype.com',
                'icon' => 'skype.png',
            ],
            [
                'name' => 'Fiverr',
                'url' => 'https://fiverr.com',
                'icon' => 'fiverr.png',
            ],
        ];

        foreach ($datas as $data) {
            SocialMediaLink::create($data);
        }
    }
}
