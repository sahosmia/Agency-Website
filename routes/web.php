<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\ArticleFrontController;
use App\Http\Controllers\Frontend\CareerFrontController;
use App\Http\Controllers\Frontend\ProjectFrontController;
use App\Http\Controllers\Frontend\ServiceFrontController;
use App\Http\Controllers\Frontend\SoftwareFrontController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


// Frontend Routes =====================================================================
Route::controller(FrontendController::class)->group(
    function () {
        Route::get('/services', 'services')->name('services');
        Route::get('/software', 'software')->name('software');
        Route::get('/projects', 'projects')->name('projects');
        Route::get('/our-work', 'ourWork')->name('our-work');

        Route::get('/job-apply-question', 'job_apply_question')->name('job-apply-question');
        Route::get('/single-software-page', 'single_software_page')->name('single-software-page');
        Route::get('/single-software-plan-page', 'single_software_plan_page')->name('single-software-plan-page');

        Route::get('/all-softwares', 'all_softwares')->name('all-softwares');

        Route::get('/custom-software', 'custom_software')->name('custom-software');
        Route::get('/lets-discuss', 'lets_discuss')->name('lets-discuss');
        Route::get('/confirmation', 'confirmation')->name('confirmation');

        Route::get('/congratulation-page', 'congratulationPage')->name('congratulation-page');
        Route::get('/thank-you-page', 'thankYouPage')->name('thank-you-page');
        Route::get('/maintenance-page', 'maintenancePage')->name('maintenance-page');
    }
);

Route::name('front.')->group(function () {
    Route::controller(FrontendController::class)->group(
        function () {
            Route::get('/', 'home')->name('home');
            Route::get('/about',  'about')->name('about');
            Route::get('/contact', 'contact')->name('contact');
            Route::get('/privacy-policy', 'privacy_policy')->name('privacy-policy');
            Route::get('/terms-conditions', 'terms_conditions')->name('terms-conditions');
        }
    );
    Route::resource('projects', ProjectFrontController::class)->only(['index', 'show'])->scoped(['project' => 'slug']);
    Route::resource('services', ServiceFrontController::class)->only(['index', 'show'])->scoped(['service' => 'slug']);
    Route::resource('softwares', SoftwareFrontController::class)->only(['index', 'show'])->scoped(['software' => 'slug']);
    Route::resource('articles', ArticleFrontController::class)->only(['index', 'show'])->scoped(['article' => 'slug']);

    Route::resource('careers', CareerFrontController::class)->only(['index', 'show'])->scoped(['career' => 'slug']);
    Route::get('/careers/apply/{slug}', [CareerFrontController::class, 'apply'])->name('careers.apply');
    Route::post('/careers/apply/{slug}', [CareerFrontController::class, 'apply_submit'])->name('careers.apply.submit');
});



// Dashboard Routes (Protected with Auth) ===========================================
Route::name('admin.')->prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('/dashboard/services', ServiceController::class);
});



// Acount Create ====================================================================
Route::controller(AuthController::class)->group(
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
