<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = Service::pluck('id');
        if ($services->isEmpty()) {
            $this->call(ServiceSeeder::class);
            $services = Service::pluck('id');
        }

        $datas = [
            'Basic Website',
            'Business Website',
            'E-commerce Website',
            'Frontend Development',
            'Backend Development',
            'Full-Stack Development',
            'Lead Generation Page',
            'Sales Page',
            'Squeeze Page',
            'Basic Maintenance',
            'Proactive Support',
            'Security Monitoring',
        ];

        foreach ($datas as $data) {
            ServiceType::create([
                'service_id' => $services->random(),
                'name' => $data,
            ]);
        }
    }
}
