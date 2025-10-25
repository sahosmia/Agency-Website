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
                'name' => 'John Doe',
                'slug' => Str::slug('John Doe'),
                'avatar' => 'one.png',
            ],
            [
                'name' => 'Jane Smith',
                'slug' => Str::slug('Jane Smith'),
                'avatar' => 'two.png',
            ],
            [
                'name' => 'Michael Brown',
                'slug' => Str::slug('Michael Brown'),
                'avatar' => 'three.png',
            ],
            [
                'name' => 'Emily Johnson',
                'slug' => Str::slug('Emily Johnson'),
                'avatar' => 'four.png',
            ],
            [
                'name' => 'David Wilson',
                'slug' => Str::slug('David Wilson'),
                'avatar' => 'five.png',
            ],
            [
                'name' => 'Sarah Miller',
                'slug' => Str::slug('Sarah Miller'),
                'avatar' => 'six.png',
            ],
            [
                'name' => 'Robert Davis',
                'slug' => Str::slug('Robert Davis'),
                'avatar' => 'seven.png',
            ],
            [
                'name' => 'Jessica Martinez',
                'slug' => Str::slug('Jessica Martinez'),
                'avatar' => 'eight.png',
            ],
            [
                'name' => 'Daniel Anderson',
                'slug' => Str::slug('Daniel Anderson'),
                'avatar' => 'nine.png',
            ],
        ];

        foreach ($datas as $data) {
            Team::create(array_merge($data, [
                'designation_id' => $designations->random(),
            ]));
        }
    }
}
