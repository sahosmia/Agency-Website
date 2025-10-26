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
        $this->call([
            AchievementSeeder::class,
            ArticleCategorySeeder::class,
            ArticleSeeder::class,
            ClientReviewSeeder::class,
            ClientSeeder::class,
            DesignationSeeder::class,
            FaqSeeder::class,
            PricePlanSeeder::class,
            ProjectCategorySeeder::class,
            ProjectSeeder::class,
            ServiceCategorySeeder::class,
            ServiceSeeder::class,
            ServiceTypeSeeder::class,
            SoftwareCategorySeeder::class,
            TechnologySeeder::class,
            KeyFeatureSeeder::class,
            SoftwareSeeder::class,
            TeamSeeder::class,
            TrustedCompanySeeder::class,
            UserSeeder::class,
            VacancyCategorySeeder::class,
            VacancySeeder::class,
            ValueSeeder::class,
            WorkingProcessSeeder::class,
            SocialMediaLinkSeeder::class,
        ]);
    }
}
