<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            // Custom Website Design
            ['service_id' => 1, 'name' => 'Basic Website'],
            ['service_id' => 1, 'name' => 'Business Website'],
            ['service_id' => 1, 'name' => 'E-commerce Website'],

            // Custom Website Development
            ['service_id' => 2, 'name' => 'Frontend Development'],
            ['service_id' => 2, 'name' => 'Backend Development'],
            ['service_id' => 2, 'name' => 'Full-Stack Development'],

            // Landing Page Design
            ['service_id' => 3, 'name' => 'Lead Generation Page'],
            ['service_id' => 3, 'name' => 'Sales Page'],
            ['service_id' => 3, 'name' => 'Squeeze Page'],

            // Website Maintenance and Support
            ['service_id' => 4, 'name' => 'Basic Maintenance'],
            ['service_id' => 4, 'name' => 'Proactive Support'],
            ['service_id' => 4, 'name' => 'Security Monitoring'],
        ];

        foreach ($datas as $data) {
            ServiceType::create($data);
        }
    }
}
