<?php

namespace Database\Seeders;

use App\Models\TrustedCompany;
use Illuminate\Database\Seeder;

class TrustedCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Company A',
                'logo' => 'logo-a.png',
            ],
            [
                'name' => 'Company B',
                'logo' => 'logo-b.png',
            ],
            [
                'name' => 'Company C',
                'logo' => 'logo-c.png',
            ],
            [
                'name' => 'Company D',
                'logo' => 'logo-d.png',
            ],
        ];

        foreach ($datas as $data) {
            TrustedCompany::create($data);
        }
    }
}
