<?php

namespace Database\Seeders;

use App\Models\Designation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'description' => 'We offer web development, SEO, branding, and digital marketing services.'
            ],
            [
                'title' => 'Co Founder Managing Director',
                'slug' => 'co-founder-managing-director',
                'description' => ''
            ],
            [
                'title' => 'Co Founder Coo',
                'slug' => 'co-founder-coo',
                'description' => 'Yes, we build custom software tailored to your business needs.'
            ],
            [
                'title' => 'Creative director',
                'slug' => 'creative-director',
                'description' => 'Our pricing depends on project complexity. Contact us for a quote.'
            ],

            [
                'title' => 'Brand Manager',
                'slug' => 'brand-manager',
                'description' => ''
            ],
            [
                'title' => 'Digital Marketing Specialist',
                'slug' => 'digital-marketing-specialist',
                'description' => ''
            ],
            [
                'title' => 'CMO',
                'slug' => 'cmo',
                'description' => ''
            ],
        ];

        foreach ($datas as $data) {
            Designation::create($data);
        }
    }
}
