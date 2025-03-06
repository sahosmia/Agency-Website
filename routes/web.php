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
        Route::get('/articles/{article:slug}', 'articles_single_page')->name('articles_single_page');
        // Route::get('/terms-and-condition', 'termsAndCondition')->name('terms-and-condition');
        Route::get('/job-apply', 'job_apply')->name('job-apply');
        //Route::get('/job-apply-question', 'job_apply-question')->name('job-apply-question');
        Route::get('/job-apply-question', 'jobApplyQuestion')->name('job-apply-question');
        Route::get('/career-page-no-jobs', 'careerPageNoJobs')->name('career-page-no-jobs');
        Route::get('/congratulation-page', 'congratulationPage')->name('congratulation-page');
        Route::get('/thank-you-page', 'thankYouPage')->name('thank-you-page');
        Route::get('/not-found-page', 'notFoundPage')->name('not-found-page');
        Route::get('/maintenance-page', 'maintenancePage')->name('maintenance-page');
        // Route::get('/log-in', 'logIn')->name('log-in');
        // Route::get('/forget-passwords', 'forgetPasswords')->name('forget-passwords');
        // Route::get('/otp-verification', 'otpVerification')->name('otp-verification');



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
        Route::get('/otp-verification', "otpVerification")->name('otp-verification');
        Route::get('/forget-password', "forgetPassword")->name('forget-password');
        Route::get('/create-new-password', "createNewPassword")->name('create-new-password');
        Route::get('/account-linked', "accountLinked")->name('account-linked');
    }
);
