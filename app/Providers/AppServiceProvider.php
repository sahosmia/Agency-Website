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
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('faqs')) {
            $faqs = Faq::get();
            $socialMediaLinks = Schema::hasTable('social_media_links') ? SocialMediaLink::get() : collect();
            View::share('faqs', $faqs);
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
