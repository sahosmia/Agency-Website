<?php

namespace App\Providers;

use App\Models\Faq;
use App\Models\Menu;
use App\Models\PageSetting;
use App\Models\Service;
use App\Models\SocialMediaLink;
use App\Models\Software;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Contracts\Repositories\ArticleRepositoryInterface::class,
            \App\Repositories\ArticleRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\ProjectRepositoryInterface::class,
            \App\Repositories\ProjectRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\ServiceRepositoryInterface::class,
            \App\Repositories\ServiceRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\SoftwareRepositoryInterface::class,
            \App\Repositories\SoftwareRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\VacancyRepositoryInterface::class,
            \App\Repositories\VacancyRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\TagRepositoryInterface::class,
            \App\Repositories\TagRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\AchievementRepositoryInterface::class,
            \App\Repositories\AchievementRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\ClientReviewRepositoryInterface::class,
            \App\Repositories\ClientReviewRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\CategoryRepositoryInterface::class,
            \App\Repositories\CategoryRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\ClientRepositoryInterface::class,
            \App\Repositories\ClientRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\JobApplicationRepositoryInterface::class,
            \App\Repositories\JobApplicationRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\MenuRepositoryInterface::class,
            \App\Repositories\MenuRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\PageSettingRepositoryInterface::class,
            \App\Repositories\PageSettingRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\TechnologyRepositoryInterface::class,
            \App\Repositories\TechnologyRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\WorkingProcessRepositoryInterface::class,
            \App\Repositories\WorkingProcessRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\FeatureRepositoryInterface::class,
            \App\Repositories\FeatureRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\DesignationRepositoryInterface::class,
            \App\Repositories\DesignationRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\KeyFeatureRepositoryInterface::class,
            \App\Repositories\KeyFeatureRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\PricePlanRepositoryInterface::class,
            \App\Repositories\PricePlanRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\ServiceTypeRepositoryInterface::class,
            \App\Repositories\ServiceTypeRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\FaqRepositoryInterface::class,
            \App\Repositories\FaqRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\ValueRepositoryInterface::class,
            \App\Repositories\ValueRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\SocialMediaLinkRepositoryInterface::class,
            \App\Repositories\SocialMediaLinkRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\TrustedCompanyRepositoryInterface::class,
            \App\Repositories\TrustedCompanyRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\ReviewerRepositoryInterface::class,
            \App\Repositories\ReviewerRepository::class
        );
        $this->app->bind(
            \App\Contracts\Repositories\TeamRepositoryInterface::class,
            \App\Repositories\TeamRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('faqs')) {
            // $faqs = Faq::get();
            $socialMediaLinks = Schema::hasTable('social_media_links') ? SocialMediaLink::get() : collect();
            // View::share('faqs', $faqs);
            View::share('socialMediaLinks', $socialMediaLinks);
        }
        View::composer('frontend.layouts.footer', function ($view) {
            $services = Schema::hasTable('services') ? Service::latest()->limit(7)->get() : collect();
            $softwares = Schema::hasTable('softwares') ? Software::latest()->limit(7)->get() : collect();
            $view->with('services', $services)->with('softwares', $softwares);
        });

        View::composer('frontend.layouts.navbar', function ($view) {
            $menus = Schema::hasTable('menus') ? Menu::orderBy('order')->get() : collect();
            $headerSettings = Schema::hasTable('page_settings') ? PageSetting::where('page_name', 'header')->first() : null;
            $view->with('menus', $menus)->with('headerSettings', $headerSettings ? $headerSettings->settings : []);
        });

        Route::pattern('id', '[0-9]+');
    }
}
