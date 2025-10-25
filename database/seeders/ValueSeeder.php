<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => 'Innovation',
                'description' => 'We are constantly pushing the boundaries of what is possible.',
                'icon' => 'innovation.svg',
            ],
            [
                'title' => 'Quality',
                'description' => 'We are committed to delivering the highest quality products and services.',
                'icon' => 'quality.svg',
            ],
            [
                'title' => 'Customer Satisfaction',
                'description' => 'We are dedicated to ensuring our customers are happy with our work.',
                'icon' => 'customer-satisfaction.svg',
            ],
        ];

        foreach ($datas as $data) {
            Value::create($data);
        }
    }
}
