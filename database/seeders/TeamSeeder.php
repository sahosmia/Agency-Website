<?php

namespace Database\Seeders;

use App\Models\Designation;
use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designations = Designation::pluck('id');
        if ($designations->isEmpty()) {
            $this->call(DesignationSeeder::class);
            $designations = Designation::pluck('id');
        }

        $datas = [
            [
                'name' => 'Jaydon Lubin',
                'slug' => Str::slug('Jaydon Lubin'),
                'avatar' => '1.jpg',
                'designation_id'=>   1,
                'is_active' => true,
            ],
            [
                'name' => 'Akfredi Dias',
                'slug' => Str::slug('Akfredi Dias'),
                'avatar' => '2.jpg',
                "designation_id"=>   2,
                'is_active' => true,
            ],
            [
                'name' => 'Marcus Ekstrom Bothman',
                'slug' => Str::slug('Marcus Ekstrom Bothman'),
                'avatar' => '3.jpg',
                'designation_id'=>   3,
                'is_active' => true,
            ],
            [
                'name' => 'Justin George',
                'slug' => Str::slug('Justin George'),
                'avatar' => '4.jpg',
                'designation_id'=>   4,
                'is_active' => true,
            ],
            [
                'name' => 'Zaure Westevelt',
                'slug' => Str::slug('Zaure Westevelt'),
                'avatar' => '5.jpg',
                'designation_id'=>   5,
                'is_active' => true,
            ],
            [
                'name' => 'Corey Baptista',
                'slug' => Str::slug('Corey Baptista'),
                'avatar' => '6.jpg',
               'designation_id'=>   6,
                'is_active' => true,
            ],
            [
                'name' => 'Wilson Culhane',
                'slug' => Str::slug('Wilson Culhane'),
                'avatar' => '7.jpg',
                'designation_id'=>   7,
                'is_active' => true,
            ],
            [
                'name' => 'Brandon Gouse',
                'slug' => Str::slug('Brandon Gouse'),
                'avatar' => '8.jpg',
                'designation_id'=>   8,
                'is_active' => true,
            ],
            [
                'name' => 'Roger Philips',
                'slug' => Str::slug('Roger Philips'),
                'avatar' => '9.jpg',
                'designation_id'=>   9,
                'is_active' => true,
            ],
        ];

        foreach ($datas as $data) {
            Team::create(array_merge($data, [
                'designation_id' => $designations->random(),
            ]));
        }
    }
}
