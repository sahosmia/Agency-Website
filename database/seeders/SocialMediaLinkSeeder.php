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
                'icon' => 'facebook.svg',
            ],
            [
                'name' => 'Twitter',
                'url' => 'https://twitter.com',
                'icon' => 'twitter.svg',
            ],
            [
                'name' => 'Instagram',
                'url' => 'https://instagram.com',
                'icon' => 'instagram.svg',
            ],
            [
                'name' => 'LinkedIn',
                'url' => 'https://linkedin.com',
                'icon' => 'linkedin.svg',
            ],
        ];

        foreach ($datas as $data) {
            SocialMediaLink::create($data);
        }
    }
}
