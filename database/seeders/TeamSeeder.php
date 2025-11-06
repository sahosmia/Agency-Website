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
                'is_active' => true,
            ],
            [
                'name' => 'Jane Smith',
                'slug' => Str::slug('Jane Smith'),
                'avatar' => 'two.png',
                'is_active' => true,
            ],
            [
                'name' => 'Michael Brown',
                'slug' => Str::slug('Michael Brown'),
                'avatar' => 'three.png',
                'is_active' => true,
            ],
            [
                'name' => 'Emily Johnson',
                'slug' => Str::slug('Emily Johnson'),
                'avatar' => 'four.png',
                'is_active' => true,
            ],
            [
                'name' => 'David Wilson',
                'slug' => Str::slug('David Wilson'),
                'avatar' => 'five.png',
                'is_active' => true,
            ],
            [
                'name' => 'Sarah Miller',
                'slug' => Str::slug('Sarah Miller'),
                'avatar' => 'six.png',
                'is_active' => true,
            ],
            [
                'name' => 'Robert Davis',
                'slug' => Str::slug('Robert Davis'),
                'avatar' => 'seven.png',
                'is_active' => true,
            ],
            [
                'name' => 'Jessica Martinez',
                'slug' => Str::slug('Jessica Martinez'),
                'avatar' => 'eight.png',
                'is_active' => true,
            ],
            [
                'name' => 'Daniel Anderson',
                'slug' => Str::slug('Daniel Anderson'),
                'avatar' => 'nine.png',
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
