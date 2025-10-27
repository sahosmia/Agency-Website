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
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\Admin\KeyFeatureController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\PageSettingController;

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

Route::resource('projects', ProjectFrontController::class)->only(['index', 'show'])->scoped(['project' => 'slug'])->names(['index' => 'projects']);
Route::resource('services', ServiceFrontController::class)->only(['index', 'show'])->scoped(['service' => 'slug'])->names(['index' => 'services']);
Route::resource('softwares', SoftwareFrontController::class)->only(['index', 'show'])->scoped(['software' => 'slug'])->names(['index' => 'softwares']);
Route::resource('articles', ArticleFrontController::class)->only(['index', 'show'])->scoped(['article' => 'slug']);

Route::resource('careers', CareerFrontController::class)->only(['index', 'show'])->scoped(['career' => 'slug']);
Route::get('/careers/apply/{slug}', [CareerFrontController::class, 'apply'])->name('careers.apply');
Route::post('/careers/apply/{slug}', [CareerFrontController::class, 'apply_submit'])->name('careers.apply.submit');

Route::fallback(function () {
    $notFoundPage = \App\Models\PageSetting::where('page_name', '404')->first();
    $notFoundSettings = $notFoundPage ? $notFoundPage->settings : [];
    return response()->view('errors.404', compact('notFoundSettings'), 404);
});

Route::name('admin.')->prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('services', ServiceController::class);
    Route::resource('project-categories', ProjectCategoryController::class);
    Route::resource('service-categories', ServiceCategoryController::class);
    Route::resource('software-categories', SoftwareCategoryController::class);
    Route::resource('article-categories', ArticleCategoryController::class);
    Route::resource('tags', \App\Http\Controllers\Admin\TagController::class);
    Route::resource('vacancy-categories', VacancyCategoryController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('softwares', SoftwareController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('vacancies', VacancyController::class);
    Route::resource('technologies', TechnologyController::class);
    Route::resource('key-features', KeyFeatureController::class);
    Route::resource('features', FeatureController::class);
    Route::resource('trusted-companies', \App\Http\Controllers\Admin\TrustedCompanyController::class);
    Route::resource('clients', \App\Http\Controllers\Admin\ClientController::class);
    Route::resource('faqs', \App\Http\Controllers\Admin\FaqController::class);
    Route::resource('working-processes', \App\Http\Controllers\Admin\WorkingProcessController::class);
    Route::resource('values', \App\Http\Controllers\Admin\ValueController::class);
    Route::resource('social-media-links', \App\Http\Controllers\Admin\SocialMediaLinkController::class);
    Route::resource('service-types', \App\Http\Controllers\Admin\ServiceTypeController::class);
    Route::resource('price-plans', \App\Http\Controllers\Admin\PricePlanController::class);

    Route::get('pages/about', [PageSettingController::class, 'about'])->name('pages.about');
    Route::post('pages/about', [PageSettingController::class, 'aboutUpdate'])->name('pages.about.update');
    Route::get('pages/home', [PageSettingController::class, 'home'])->name('pages.home');
    Route::post('pages/home', [PageSettingController::class, 'homeUpdate'])->name('pages.home.update');
    Route::get('pages/contact', [PageSettingController::class, 'contact'])->name('pages.contact');
    Route::post('pages/contact', [PageSettingController::class, 'contactUpdate'])->name('pages.contact.update');
    Route::get('pages/404', [PageSettingController::class, 'notFound'])->name('pages.404');
    Route::post('pages/404', [PageSettingController::class, 'notFoundUpdate'])->name('pages.404.update');
    Route::get('pages/terms', [PageSettingController::class, 'terms'])->name('pages.terms');
    Route::post('pages/terms', [PageSettingController::class, 'termsUpdate'])->name('pages.terms.update');
    Route::get('pages/privacy', [PageSettingController::class, 'privacy'])->name('pages.privacy');
    Route::post('pages/privacy', [PageSettingController::class, 'privacyUpdate'])->name('pages.privacy.update');
    Route::get('pages/services', [PageSettingController::class, 'services'])->name('pages.services');
    Route::post('pages/services', [PageSettingController::class, 'servicesUpdate'])->name('pages.services.update');
    Route::get('pages/articles', [PageSettingController::class, 'articles'])->name('pages.articles');
    Route::post('pages/articles', [PageSettingController::class, 'articlesUpdate'])->name('pages.articles.update');
    Route::get('pages/softwares', [PageSettingController::class, 'softwares'])->name('pages.softwares');
    Route::post('pages/softwares', [PageSettingController::class, 'softwaresUpdate'])->name('pages.softwares.update');
    Route::get('pages/projects', [PageSettingController::class, 'projects'])->name('pages.projects');
    Route::post('pages/projects', [PageSettingController::class, 'projectsUpdate'])->name('pages.projects.update');
    Route::get('pages/all-softwares', [PageSettingController::class, 'allSoftwares'])->name('pages.all-softwares');
    Route::post('pages/all-softwares', [PageSettingController::class, 'allSoftwaresUpdate'])->name('pages.all-softwares.update');
    Route::get('pages/custom-software', [PageSettingController::class, 'customSoftware'])->name('pages.custom-software');
    Route::post('pages/custom-software', [PageSettingController::class, 'customSoftwareUpdate'])->name('pages.custom-software.update');
    Route::get('pages/lets-discuss', [PageSettingController::class, 'letsDiscuss'])->name('pages.lets-discuss');
    Route::post('pages/lets-discuss', [PageSettingController::class, 'letsDiscussUpdate'])->name('pages.lets-discuss.update');
    Route::get('pages/thank-you', [PageSettingController::class, 'thankYou'])->name('pages.thank-you');
    Route::post('pages/thank-you', [PageSettingController::class, 'thankYouUpdate'])->name('pages.thank-you.update');
    Route::get('pages/service-plans', [PageSettingController::class, 'servicePlans'])->name('pages.service-plans');
    Route::post('pages/service-plans', [PageSettingController::class, 'servicePlansUpdate'])->name('pages.service-plans.update');
    Route::get('pages/software-plans', [PageSettingController::class, 'softwarePlans'])->name('pages.software-plans');
    Route::post('pages/software-plans', [PageSettingController::class, 'softwarePlansUpdate'])->name('pages.software-plans.update');
    Route::get('pages/careers', [PageSettingController::class, 'careers'])->name('pages.careers');
    Route::post('pages/careers', [PageSettingController::class, 'careersUpdate'])->name('pages.careers.update');
    Route::get('pages/service-detail', [PageSettingController::class, 'serviceDetail'])->name('pages.service-detail');
    Route::post('pages/service-detail', [PageSettingController::class, 'serviceDetailUpdate'])->name('pages.service-detail.update');
    Route::get('pages/article-detail', [PageSettingController::class, 'articleDetail'])->name('pages.article-detail');
    Route::post('pages/article-detail', [PageSettingController::class, 'articleDetailUpdate'])->name('pages.article-detail.update');
    Route::get('pages/software-detail', [PageSettingController::class, 'softwareDetail'])->name('pages.software-detail');
    Route::post('pages/software-detail', [PageSettingController::class, 'softwareDetailUpdate'])->name('pages.software-detail.update');
    Route::get('pages/project-detail', [PageSettingController::class, 'projectDetail'])->name('pages.project-detail');
    Route::post('pages/project-detail', [PageSettingController::class, 'projectDetailUpdate'])->name('pages.project-detail.update');
});


require __DIR__.'/auth.php';
