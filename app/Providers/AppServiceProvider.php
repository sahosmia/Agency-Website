<?php

namespace App\Providers;

use App\Models\Faq;
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
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('faqs')) {
            $faqs = Faq::get();
            View::share('g_faqs', $faqs);
        }
        View::composer('frontend.layouts.footer', function ($view) {
            $services = Schema::hasTable('services') ? Service::latest()->limit(7)->get() : collect();
            $softwares = Schema::hasTable('softwares') ? Software::latest()->limit(7)->get() : collect();
            $socialMediaLinks = Schema::hasTable('social_media_links') ? SocialMediaLink::get() : collect();
            $view->with('services', $services)->with('softwares', $softwares)->with('socialMediaLinks', $socialMediaLinks);
        });

        Route::pattern('id', '[0-9]+');
    }
}
