<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\PricePlan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            ['name' => 'Full Source Code'],
            ['name' => 'Live Preview'],
            ['name' => 'Support 24/7'],
            ['name' => 'Product Review'],
            ['name' => 'Product Demo'],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }

        $pricePlans = PricePlan::all();
        $features = Feature::all();

        foreach ($pricePlans as $pricePlan) {
            foreach ($features as $feature) {
                $isActive = false;
                if ($pricePlan->name === 'Basic') {
                    $isActive = in_array($feature->name, ['Live Preview', 'Product Demo']);
                } elseif ($pricePlan->name === 'Standard') {
                    $isActive = in_array($feature->name, ['Live Preview', 'Support 24/7', 'Product Review', 'Product Demo']);
                } elseif ($pricePlan->name === 'Advanced') {
                    $isActive = true;
                }

                $pricePlan->features()->attach($feature->id, ['is_active' => $isActive]);
            }
        }
    }
}
