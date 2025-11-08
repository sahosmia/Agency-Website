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
                'name' => 'CRM Software',
                'slug' => 'crm-software',
                'image' => 'software/crm.jpg',
                'meta_title' => 'CRM Software',
                'meta_description' => 'CRM Software',
            ],
            [
                'name' => 'Project Management Tool',
                'slug' => 'project-management-tool',
                'image' => 'software/pm-tool.jpg',
                'meta_title' => 'Project Management Tool',
                'meta_description' => 'Project Management Tool',
            ],
            [
                'name' => 'Accounting Software',
                'slug' => 'accounting-software',
                'image' => 'software/accounting.jpg',
                'meta_title' => 'Accounting Software',
                'meta_description' => 'Accounting Software',
            ],
            [
                'name' => 'HR Management System',
                'slug' => 'hr-management-system',
                'image' => 'software/hr.jpg',
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
