<?php

namespace Database\Seeders;

use App\Models\Software;
use App\Models\Category;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::pluck('id');
        if ($categories->isEmpty()) {
            $this->call(CategorySeeder::class);
            $categories = Category::pluck('id');
        }

        $datas = [
            [
                'name' => 'Custom made Software for Your Needs',
                'slug' => 'custom-made-software-for-your-needs',
                'image' => '1.png',
                'sort_description' => 'Our custom software development services are designed to create solutions that align perfectly with your business objectives. Whether you need to enhance efficiency, improve customer experiences, or scale operations, we’re here to deliver.',
                'meta_title' => 'Custom made Software for Your Needs',
                'meta_description' => 'Our custom software development services are designed to create solutions that align perfectly with your business objectives. Whether you need to enhance efficiency, improve customer experiences, or scale operations, we’re here to deliver.',
            ],
            [
                'name' => 'NGO Management System',
                'slug' => 'ngo-management-system',
                'image' => '2.png',
                'sort_description' => 'Optimize your NGO\'s operations with our comprehensive solution. Manage donations, volunteers, projects, and reporting seamlessly, all in one place.',
                'meta_title' => 'NGO Management System',
                'meta_description' => 'Optimize your NGO\'s operations with our comprehensive solution. Manage donations, volunteers, projects, and reporting seamlessly, all in one place.',
            ],
            [
                'name' => 'School Management System',
                'slug' => 'school-management-system',
                'image' => '3.png',
                'sort_description' => 'Streamline school administration with features for managing students, teachers, schedules, fees, and exams efficiently. Empower educators and enhance the learning experience.',
                'meta_title' => 'School Management System',
                'meta_description' => 'Streamline school administration with features for managing students, teachers, schedules, fees, and exams efficiently. Empower educators and enhance the learning experience.',
            ],
            [
                'name' => 'HR Management System',
                'slug' => 'hr-management-system',
                'image' => '4.png',
                'sort_description' => 'Simplify HR processes with our all-in-one solution. Manage employee records, attendance, payroll, and performance evaluations with ease and efficiency.',
                'meta_title' => 'HR Management System',
                'meta_description' => 'HR Management System',
            ],
        ];

        foreach ($datas as $data) {
            Software::firstOrCreate(
                ['slug' => $data['slug']],
                array_merge($data, [
                    'category_id' => $categories->random(),
                ])
            );
        }
    }
}
