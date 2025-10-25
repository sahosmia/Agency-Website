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
        // ১. সার্ভিস ডিপেন্ডেন্সি চেক
        $services = Service::pluck('id');
        if ($services->isEmpty()) {
            $this->call(ServiceSeeder::class);
            $services = Service::pluck('id');
        }

        // চূড়ান্ত সুরক্ষা: যদি সার্ভিস না পাওয়া যায়
        if ($services->isEmpty()) {
            echo "Warning: Service IDs are still missing. Aborting ServiceType seeding.\n";
            return;
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

        // ২. ডুপ্লিকেট এড়াতে firstOrCreate ব্যবহার
        foreach ($datas as $data) {
            ServiceType::firstOrCreate(
                [
                    // চেক করার জন্য কন্ডিশন: যদি 'name' কলামের ভ্যালু $data হয়
                    'name' => $data,
                ],
                [
                    // তৈরি করার জন্য ডেটা: যদি উপরে না পাওয়া যায়, তবে এই ডেটা দিয়ে নতুন তৈরি করো
                    'service_id' => $services->random(),
                ]
            );
        }
    }
}
