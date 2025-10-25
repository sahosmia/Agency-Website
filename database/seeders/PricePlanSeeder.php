<?php

namespace Database\Seeders;

use App\Models\PricePlan;
use App\Models\ServiceType;
use Illuminate\Database\Seeder;

class PricePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serviceTypes = ServiceType::all();

        foreach ($serviceTypes as $serviceType) {
            PricePlan::create([
                'planable_id' => $serviceType->id,
                'planable_type' => ServiceType::class,
                'name' => 'Basic',
                'price' => 499.00,
                'features' => ['Up to 5 pages', 'Responsive design', 'Contact form'],
            ]);

            PricePlan::create([
                'planable_id' => $serviceType->id,
                'planable_type' => ServiceType::class,
                'name' => 'Standard',
                'price' => 999.00,
                'features' => ['Up to 10 pages', 'CMS integration', 'Basic SEO'],
            ]);

            PricePlan::create([
                'planable_id' => $serviceType->id,
                'planable_type' => ServiceType::class,
                'name' => 'Advanced',
                'price' => 1999.00,
                'features' => ['Unlimited pages', 'E-commerce functionality', 'Advanced SEO'],
            ]);
        }
    }
}
