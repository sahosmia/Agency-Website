<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TrustedPartner;

class TrustedPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TrustedPartner::updateOrCreate(
            ['name' => 'Fiverr'],
            ['logo' => 'fiverr.svg']
        );
        TrustedPartner::updateOrCreate(
            ['name' => 'Envato'],
            ['logo' => 'envato.svg']
        );
        TrustedPartner::updateOrCreate(
            ['name' => 'Upwork'],
            ['logo' => 'upwork-2.svg']
        );
        TrustedPartner::updateOrCreate(
            ['name' => 'PeoplePerHour'],
            ['logo' => 'peopleperhour.svg']
        );
    }
}
