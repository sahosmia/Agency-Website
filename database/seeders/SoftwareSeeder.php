<?php

namespace Database\Seeders;

use App\Models\Software;
use App\Models\SoftwareCategory;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = SoftwareCategory::pluck('id');
        if ($categories->isEmpty()) {
            $this->call(SoftwareCategorySeeder::class);
            $categories = SoftwareCategory::pluck('id');
        }

        $datas = [
            [
                'name' => 'CRM Software',
                'slug' => 'crm-software',
                'image' => 'software/crm.jpg',
            ],
            [
                'name' => 'Project Management Tool',
                'slug' => 'project-management-tool',
                'image' => 'software/pm-tool.jpg',
            ],
            [
                'name' => 'Accounting Software',
                'slug' => 'accounting-software',
                'image' => 'software/accounting.jpg',
            ],
            [
                'name' => 'HR Management System',
                'slug' => 'hr-management-system',
                'image' => 'software/hr.jpg',
            ],
        ];

        foreach ($datas as $data) {
            Software::create(array_merge($data, [
                'software_category_id' => $categories->random(),
            ]));
        }
    }
}
