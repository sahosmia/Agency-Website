<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(FaqSeeder::class);
        $this->call(ProjectCategorySeeder::class);
        $this->call(ServiceCategorySeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ServiceTypeSeeder::class);
        $this->call(PricePlanSeeder::class);
        $this->call(SoftwareCategorySeeder::class);
        $this->call(ArticleCategorySeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(VacancyCategorySeeder::class);
        $this->call(VacancySeeder::class);
        $this->call(DesignationSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ClientReviewSeeder::class);
        $this->call(ProjectSeeder::class);
    }
}
