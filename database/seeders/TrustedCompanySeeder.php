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
                'name' => 'Envato',
                'image' => 'envato.png',
            ],
            [
                'name' => 'Fiverr',
                'image' => 'fiverr.png',
            ],
            [
                'name' => 'Upwork',
                'image' => 'upwork.png',
            ],
            [
                'name' => 'Govt of Bangladesh',
                'image' => 'govt.png',
            ],
        ];

        foreach ($datas as $data) {
            TrustedCompany::create($data);
        }
    }
}
