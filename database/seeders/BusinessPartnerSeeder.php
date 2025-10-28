<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BusinessPartner;

class BusinessPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BusinessPartner::updateOrCreate(
            ['name' => 'Partner 1'],
            ['logo' => 'partner-1.png']
        );
        BusinessPartner::updateOrCreate(
            ['name' => 'Partner 2'],
            ['logo' => 'partner-2.png']
        );
        BusinessPartner::updateOrCreate(
            ['name' => 'Partner 3'],
            ['logo' => 'partner-3.png']
        );
    }
}
