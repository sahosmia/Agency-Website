<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::updateOrCreate(
            ['name' => 'Home'],
            ['route' => 'home', 'order' => 1]
        );
        Menu::updateOrCreate(
            ['name' => 'Services'],
            ['route' => 'services', 'order' => 2]
        );
        Menu::updateOrCreate(
            ['name' => 'Software'],
            ['route' => 'softwares', 'order' => 3]
        );
        Menu::updateOrCreate(
            ['name' => 'Projects'],
            ['route' => 'projects', 'order' => 4]
        );
        Menu::updateOrCreate(
            ['name' => 'Contact us'],
            ['route' => 'contact', 'order' => 5]
        );
    }
}
