<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomePageCarouselController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontController::class, 'saveContact'])->name('contact.store');
Route::get('/packages', [FrontController::class, 'packages'])->name('packages');
Route::get('/privacy-policy', [FrontController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/term-condition', [FrontController::class, 'termsCondition'])->name('terms.condition');
Route::post('/enquiry-submit', [FrontController::class, 'enquirySubmit'])->name('enquiry.submit');

Route::get('login', function () {
    return redirect()->route('admin.login');
});
Route::get('admin', function () {
    return redirect()->route('admin.login');
});

Route::get('admin/login', function () {
    return redirect()->route('admin.login');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/login', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'loginPost'])->name('login.post');
    Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('contacts', [AdminController::class, 'showContacts'])->name('contacts');
        Route::get('enquiries', [AdminController::class, 'showEnquiries'])->name('enquiries');

        // ---Social Media Links---
        Route::group(['prefix' => 'social-media', 'as' => 'social.media.'], function () {
            Route::controller(AdminController::class)->group(function () {
                Route::get("/show", "socialMediaShow")->name("show");
                Route::get("/create", "socialMediaCreate")->name("create");
                Route::post("/storeOrUpdate", "socialMediaStoreOrUpdate")->name("storeOrUpdate");
            });
        });

        Route::group(['prefix' => 'app', 'as' => 'app.'], function () {
            Route::controller(AdminController::class)->group(function () {
                Route::get("/setting", "appSetting")->name("setting");
                Route::post("/setting-update", "appSettingUpdate")->name("setting.update");
            });
        });

        Route::resource('home-page-carousel', HomePageCarouselController::class);
        // Add more authenticated routes here
    });
});
