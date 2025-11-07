<?php

use Illuminate\Support\Facades\Route;

// ========== Controllers ==========
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\{
    DashboardController,
    ArticleController,
    ArticleCategoryController,
    ProjectController,
    ProjectCategoryController,
    ServiceController,
    ServiceCategoryController,
    SoftwareController,
    SoftwareCategoryController,
    VacancyController,
    VacancyCategoryController,
    TechnologyController,
    KeyFeatureController,
    FeatureController,
    PageSettingController,
    MenuController,
    ApplicantController,
    TeamController,
    DesignationController,
    ClientReviewController
};
use App\Http\Controllers\Admin\{
    TagController,
    TrustedCompanyController,
    ClientController,
    FaqController,
    WorkingProcessController,
    ValueController,
    SocialMediaLinkController,
    ServiceTypeController,
    PricePlanController
};
use App\Http\Controllers\Frontend\{
    HomeController,
    PageController,
    ContactController,
    ProjectFrontController,
    ServiceFrontController,
    SoftwareFrontController,
    ArticleFrontController,
    CareerFrontController
};

// ============================================================================
// Frontend Routes
// ============================================================================
Route::get('/', [HomeController::class, 'index'])->name('home');

// Contact Routes
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contact_submit')->name('contact.submit');
});

// Static Page Routes
Route::controller(PageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/our-work', 'ourWork')->name('our-work');
    Route::get('/job-apply-question', 'job_apply_question')->name('job-apply-question');
    Route::get('/single-software-page', 'single_software_page')->name('single-software-page');
    Route::get('/single-software-plan-page', 'single_software_plan_page')->name('single-software-plan-page');
    Route::get('/service-plans', 'service_plans')->name('service-plans');
    Route::get('/software-plans', 'software_plans')->name('software-plans');
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

// Resource Routes (Frontend)
Route::resource('projects', ProjectFrontController::class)
    ->only(['index', 'show'])->scoped(['project' => 'slug'])->names(['index' => 'projects']);

Route::resource('services', ServiceFrontController::class)
    ->only(['index', 'show'])->scoped(['service' => 'slug'])->names(['index' => 'services']);

Route::resource('softwares', SoftwareFrontController::class)
    ->only(['index', 'show'])->scoped(['software' => 'slug'])->names(['index' => 'softwares']);

Route::resource('articles', ArticleFrontController::class)
    ->only(['index', 'show'])->scoped(['article' => 'slug']);

Route::resource('careers', CareerFrontController::class)
    ->only(['index', 'show'])->scoped(['career' => 'slug']);

Route::controller(CareerFrontController::class)->group(function () {
    Route::get('/careers/apply/{slug}', 'apply')->name('careers.apply');
    Route::post('/careers/apply/{slug}', 'apply_submit')->name('careers.apply.submit');
});

// 404 Fallback Page
Route::fallback(function () {
    $notFoundPage = \App\Models\PageSetting::where('page_name', '404')->first();
    $notFoundSettings = $notFoundPage ? $notFoundPage->settings : [];
    return response()->view('errors.404', compact('notFoundSettings'), 404);
});

// ============================================================================
// Authenticated User Routes
// ============================================================================
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ============================================================================
// Admin Routes
// ============================================================================
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Resource Routes
    Route::resources([
        'services'            => ServiceController::class,
        'service-categories'  => ServiceCategoryController::class,
        'service-types'       => ServiceTypeController::class,
        'projects'            => ProjectController::class,
        'project-categories'  => ProjectCategoryController::class,
        'softwares'           => SoftwareController::class,
        'software-categories' => SoftwareCategoryController::class,
        'articles'            => ArticleController::class,
        'article-categories'  => ArticleCategoryController::class,
        'tags'                => TagController::class,
        'vacancies'           => VacancyController::class,
        'vacancy-categories'  => VacancyCategoryController::class,
        'technologies'        => TechnologyController::class,
        'key-features'        => KeyFeatureController::class,
        'features'            => FeatureController::class,
        'trusted-companies'   => TrustedCompanyController::class,
        'clients'             => ClientController::class,
        'faqs'                => FaqController::class,
        'working-processes'   => WorkingProcessController::class,
        'values'              => ValueController::class,
        'social-media-links'  => SocialMediaLinkController::class,
        'price-plans'         => PricePlanController::class,
        'menus'               => MenuController::class,
        'applicants'          => ApplicantController::class,
        'teams'               => TeamController::class,
        'designations'        => DesignationController::class,
        'client-reviews'      => ClientReviewController::class,
    ]);

    // Page Settings
    Route::controller(PageSettingController::class)
        ->prefix('pages')->name('pages.')
        ->group(function () {
            Route::get('/{pageName}', 'index')->name('index');
            Route::post('/{pageName}', 'update')->name('update');
        });
});

// ============================================================================
// Auth Routes
// ============================================================================
require __DIR__ . '/auth.php';
