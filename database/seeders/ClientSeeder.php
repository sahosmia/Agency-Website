<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'John Doe',
                'location' => 'New York, USA',
                'image' => 'client1.jpg',
            ],
            [
                'name' => 'Jane Smith',
                'location' => 'London, UK',
                'image' => 'client2.jpg',
            ],
            [
                'name' => 'Mike Johnson',
                'location' => 'Sydney, Australia',
                'image' => 'client3.jpg',
            ],
        ];

        foreach ($datas as $data) {
            Client::create($data);
        }
    }
}
