<?php

namespace App\Providers;

use App\Models\Faq;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;



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
        $faqs = Faq::get();
        View::share('g_faqs', $faqs);


        Route::pattern('id', '[0-9]+');
    }
}
