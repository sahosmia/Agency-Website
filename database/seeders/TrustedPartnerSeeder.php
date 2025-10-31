<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrustedPartner;

class TrustedPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $trustedPartners = [
            ['name' => 'Fiverr', 'logo' => 'fiverr.svg'],
            ['name' => 'Envato', 'logo' => 'envato.svg'],
            ['name' => 'Upwork', 'logo' => 'upwork.svg'],
            ['name' => 'Bangladesh Govt', 'logo' => 'bangladesh-govt.png'],
        ];

        foreach ($trustedPartners as $partner) {
            TrustedPartner::updateOrCreate(
                ['name' => $partner['name']],
                ['logo' => $partner['logo']]
            );
        }
    }
}
