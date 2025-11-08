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
            SocialMediaLinkSeeder::class,
            AchievementSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            ArticleSeeder::class,

            ClientReviewSeeder::class,
            ClientSeeder::class,
            DesignationSeeder::class,
            FeatureSeeder::class,
            PricePlanSeeder::class,
            ProjectSeeder::class,
            ServiceSeeder::class,
            ServiceTypeSeeder::class,
            TechnologySeeder::class,
            KeyFeatureSeeder::class,
            SoftwareSeeder::class,
            TeamSeeder::class,
            TrustedCompanySeeder::class,
            UserSeeder::class,
            VacancySeeder::class,
            ValueSeeder::class,
            WorkingProcessSeeder::class,
            PageSettingSeeder::class,
            MenuSeeder::class,
            TrustedPartnerSeeder::class,
            BusinessTagSeeder::class,
            FaqSeeder::class,
        ]);
    }
}
