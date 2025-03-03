<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


// Frontend Routes =====================================================================
Route::controller(FrontendController::class)->group(
    function () {
        Route::get('/', 'home')->name('home');
        Route::get('/about',  'about')->name('about');
        Route::get('/services', 'services')->name('services');
        Route::get('/software', 'software')->name('software');
        Route::get('/projects', 'projects')->name('projects');
        Route::get('/our-work', 'ourWork')->name('our-work');
        Route::get('/insights', 'insights')->name('insights');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/articles', 'articles')->name('articles');
        Route::get('/articles/single-page', 'articlesSinglePage')->name('articlesSinglePage');
        // Route::get('/terms-and-condition', 'termsAndCondition')->name('terms-and-condition');
        Route::get('/job-apply', 'job_apply')->name('job-apply');
        //Route::get('/job-apply-question', 'job_apply-question')->name('job-apply-question');
        Route::get('/job-apply-question', 'jobApplyQuestion')->name('job-apply-question');

    }
);

// Dashboard Routes (Protected with Auth) ===========================================
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/dashboard/services', ServiceController::class);
});



// Acount Create ====================================================================
Route::name('auth.')->controller(AuthController::class)->group(
    function () {
        Route::get('/login', "login")->name('login');
        Route::get('/register', "register")->name('register');
        Route::get('/register-successfull', "register-successfull")->name('register-successfull');
        Route::get('/otp-verification', "otp-verification")->name('otp-verification');
        Route::get('/forget-password', "forget-password")->name('forget-password');
    }
);
