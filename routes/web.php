<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PortfolioCategoryController;
use App\Http\Controllers\Admin\ReferenceController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TimelineController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\FaqController;

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('site.pages.index');
})->name('site.home');

Route::get('/hakkimizda', function () {
    return view('site.pages.about');
})->name('site.about');

Route::get('/hizmetlerimiz', function () {
    return view('site.pages.services');
})->name('site.services');

Route::get('/portfolyo', function () {
    return view('site.pages.portfolio');
})->name('site.portfolio');

Route::get('/portfolyo/detail', function () {
    return view('site.pages.portfolio-detail');
})->name('site.portfolio.detail');

Route::get('/referanslar', function () {
    return view('site.pages.references');
})->name('site.references');

Route::get('/blog', function () {
    return view('site.pages.blog');
})->name('site.blog');

Route::get('/blog/detail', function () {
    return view('site.pages.blog-detail');
})->name('site.blog.detail');

Route::get('/iletisim', function () {
    return view('site.pages.contact');
})->name('site.contact');

/*
|--------------------------------------------------------------------------
| Admin Auth Routes (public)
|--------------------------------------------------------------------------
*/

Route::get('/admin', [AdminController::class, 'loginPage'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.checklogin');

/*
|--------------------------------------------------------------------------
| Admin Panel Routes (protected)
|--------------------------------------------------------------------------
*/

Route::middleware(['admin.auth'])->prefix('yonetim')->group(function () {

    // Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');

    // Logout
    Route::get('/cikis', [AdminController::class, 'logout'])->name('admin.logout');

    // Sliders
    Route::resource('sliders', SliderController::class)->names('sliders');

    // Services
    Route::resource('services', ServiceController::class)->names('services');

    // Portfolio Categories
    Route::resource('portfolio-categories', PortfolioCategoryController::class)
        ->names('portfolio-categories')
        ->parameters(['portfolio-categories' => 'portfolioCategory']);

    // Portfolio
    Route::resource('portfolios', PortfolioController::class)->names('portfolios');

    // References
    Route::resource('references', ReferenceController::class)->names('references');

    // Blogs
    Route::resource('blogs', BlogController::class)->names('blogs');

    // Team Members
    Route::resource('team', TeamController::class)->names('team');

    // Timeline Events
    Route::resource('timeline', TimelineController::class)->names('timeline');

    // Contact Messages (read + delete only)
    Route::get('contactMessages', [ContactMessageController::class, 'index'])->name('contactMessages.index');
    Route::get('contactMessages/{contactMessage}', [ContactMessageController::class, 'show'])->name('contactMessages.show');
    Route::delete('contactMessages/{contactMessage}', [ContactMessageController::class, 'destroy'])->name('contactMessages.destroy');

    // About (single record — index shows edit form)
    Route::get('about', [AboutController::class, 'index'])->name('about.index');
    Route::put('about/{about}', [AboutController::class, 'update'])->name('about.update');

    // FAQ (Sık Sorulan Sorular)
    Route::resource('faqs', FaqController::class)->names('faqs');

    // Settings (single record)
    Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('settings/{settings}', [SettingsController::class, 'update'])->name('settings.update');
});
