<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'United States',
                'image' => 'United States Flag.png',
            ],
            [
                'name' => 'Canada',
                'image' => 'Canada Flag.png',
            ],
            [
                'name' => 'Australia',
                'image' => 'Australia Flag.png',
            ],
            [
                'name' => 'United Arab Emirates',
                'image' => 'United Arab Emirates Flag.png',
            ],
            [
                'name' => 'Bangladesh',
                'image' => 'Bangladesh Flag.png',
            ],

        ];

        foreach ($datas as $data) {
            Client::create($data);
        }
    }
}
