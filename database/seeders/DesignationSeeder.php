<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => 'Founder, CEO',
                'slug' => 'founder-ceo',
                'description' => '',
            ],
            [
                'title' => 'Co Founder Managing Director',
                'slug' => 'co-founder-managing-director',
                'description' => '',
            ],
            [
                'title' => 'Co Founder Coo',
                'slug' => 'co-founder-coo',
                'description' => '',
            ],
            [
                'title' => 'Creative director',
                'slug' => 'Creative director',
                'description' => '',
            ],
            [
                'title' => 'CMO',
                'slug' => 'CMO',
                'description' => '',
            ],

            [
                'title' => 'Digital Marketing Specialist',
                'slug' => 'Digital Marketing Specialist',
                'description' => '',
            ],
            [
                'title' => 'Product Marketing Manager',
                'slug' => 'Product Marketing Manager',
                'description' => '',
            ],
            [
                'title' => 'Brand Manager',
                'slug' => 'Brand Manager',
                'description' => '',
            ],
            [
                'title' => 'Marketing Analyst',
                'slug' => 'Marketing Analyst',
                'description' => '',
            ],
        ];

        foreach ($datas as $data) {
            Designation::create($data);
        }
    }
}
