<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'John Doe',
                'slug' => Str::slug('John Doe'),
                'avatar' => 'one.png',
                'designation_id' => 1,
            ],
            [
                'name' => 'Jane Smith',
                'slug' => Str::slug('Jane Smith'),
                'avatar' => 'two.png',
                'designation_id' => 2,
            ],
            [
                'name' => 'Michael Brown',
                'slug' => Str::slug('Michael Brown'),
                'avatar' => 'three.png',
                'designation_id' => 3,
            ],
            [
                'name' => 'Emily Johnson',
                'slug' => Str::slug('Emily Johnson'),
                'avatar' => 'four.png',
                'designation_id' => 4,
            ],
            [
                'name' => 'David Wilson',
                'slug' => Str::slug('David Wilson'),
                'avatar' => 'five.png',
                'designation_id' => 5,
            ],
            [
                'name' => 'Sarah Miller',
                'slug' => Str::slug('Sarah Miller'),
                'avatar' => 'six.png',
                'designation_id' => 6,
            ],
            [
                'name' => 'Robert Davis',
                'slug' => Str::slug('Robert Davis'),
                'avatar' => 'seven.png',
                'designation_id' => 7,
            ],
            [
                'name' => 'Jessica Martinez',
                'slug' => Str::slug('Jessica Martinez'),
                'avatar' => 'eight.png',
                'designation_id' => 3,
            ],
            [
                'name' => 'Daniel Anderson',
                'slug' => Str::slug('Daniel Anderson'),
                'avatar' => 'nine.png',
                'designation_id' => 2,
            ],
        ];

        foreach ($datas as $data) {
            Team::create($data);
        }
    }
}
