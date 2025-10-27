<?php

namespace Database\Seeders;

use App\Models\PricePlan;
use App\Models\ServiceType;
use App\Models\Software;
use Illuminate\Database\Seeder;

class PricePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serviceTypes = ServiceType::all();

        if ($serviceTypes->isEmpty()) {
            $this->call(ServiceTypeSeeder::class);
            $serviceTypes = ServiceType::all();
        }

        foreach ($serviceTypes as $serviceType) {
            PricePlan::create([
                'planable_id' => $serviceType->id,
                'planable_type' => ServiceType::class,
                'name' => 'Basic',
                'price' => 499.00,
            ]);

            PricePlan::create([
                'planable_id' => $serviceType->id,
                'planable_type' => ServiceType::class,
                'name' => 'Standard',
                'price' => 999.00,
            ]);

            PricePlan::create([
                'planable_id' => $serviceType->id,
                'planable_type' => ServiceType::class,
                'name' => 'Advanced',
                'price' => 1999.00,
            ]);
        }

        $softwares = Software::all();

        if ($softwares->isEmpty()) {
            $this->call(SoftwareSeeder::class);
            $softwares = Software::all();
        }

        foreach ($softwares as $software) {
            PricePlan::create([
                'planable_id' => $software->id,
                'planable_type' => Software::class,
                'name' => 'Basic',
                'price' => 29.00,
            ]);

            PricePlan::create([
                'planable_id' => $software->id,
                'planable_type' => Software::class,
                'name' => 'Standard',
                'price' => 59.00,
            ]);

            PricePlan::create([
                'planable_id' => $software->id,
                'planable_type' => Software::class,
                'name' => 'Advanced',
                'price' => 99.00,
            ]);
        }
    }
}
