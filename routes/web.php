<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Frontend\ArticleFrontController;
use App\Http\Controllers\Frontend\CareerFrontController;
use App\Http\Controllers\Frontend\ProjectFrontController;
use App\Http\Controllers\Frontend\ServiceFrontController;
use App\Http\Controllers\Frontend\SoftwareFrontController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\ContactController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\SoftwareController;
use App\Http\Controllers\Admin\SoftwareCategoryController;
use App\Http\Controllers\Admin\VacancyCategoryController;
use App\Http\Controllers\Admin\VacancyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Frontend Routes =====================================================================
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contact_submit')->name('contact.submit');
});

Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
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
    Route::get('/privacy-policy', 'privacy_policy')->name('privacy-policy');
    Route::get('/terms-conditions', 'terms_conditions')->name('terms-conditions');
});

Route::resource('projects', ProjectFrontController::class)->only(['index', 'show'])->scoped(['project' => 'slug'])->names(['index' => 'projects']);
Route::resource('services', ServiceFrontController::class)->only(['index', 'show'])->scoped(['service' => 'slug'])->names(['index' => 'services']);
Route::resource('softwares', SoftwareFrontController::class)->only(['index', 'show'])->scoped(['software' => 'slug'])->names(['index' => 'softwares']);
Route::resource('articles', ArticleFrontController::class)->only(['index', 'show'])->scoped(['article' => 'slug']);

Route::resource('careers', CareerFrontController::class)->only(['index', 'show'])->scoped(['career' => 'slug']);
Route::get('/careers/apply/{slug}', [CareerFrontController::class, 'apply'])->name('careers.apply');
Route::post('/careers/apply/{slug}', [CareerFrontController::class, 'apply_submit'])->name('careers.apply.submit');


Route::name('admin.')->prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('services', ServiceController::class);
    Route::resource('project-categories', ProjectCategoryController::class);
    Route::resource('service-categories', ServiceCategoryController::class);
    Route::resource('software-categories', SoftwareCategoryController::class);
    Route::resource('article-categories', ArticleCategoryController::class);
    Route::resource('vacancy-categories', VacancyCategoryController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('softwares', SoftwareController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('vacancies', VacancyController::class);
    Route::resource('trusted-companies', \App\Http\Controllers\Admin\TrustedCompanyController::class);
    Route::resource('clients', \App\Http\Controllers\Admin\ClientController::class);
    Route::resource('faqs', \App\Http\Controllers\Admin\FaqController::class);
    Route::resource('working-processes', \App\Http\Controllers\Admin\WorkingProcessController::class);
    Route::resource('values', \App\Http\Controllers\Admin\ValueController::class);
    Route::resource('social-media-links', \App\Http\Controllers\Admin\SocialMediaLinkController::class);
    Route::resource('service-types', \App\Http\Controllers\Admin\ServiceTypeController::class);
    Route::resource('price-plans', \App\Http\Controllers\Admin\PricePlanController::class);
});


require __DIR__.'/auth.php';
