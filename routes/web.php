<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\FrontController;
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
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontController::class, 'saveContact'])->name('contact.store');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/packages', [FrontController::class, 'packages'])->name('packages');
Route::get('/privacy-policy', [FrontController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/term-condition', [FrontController::class, 'termsCondition'])->name('terms.condition');
Route::get('/jeep-safari', [FrontController::class, 'jeepSafari'])->name('jeep.safari');
Route::get('/elephant-safari', [FrontController::class, 'elephantSafari'])->name('elephant.safari');
Route::get('/canter-safari', [FrontController::class, 'canterSafari'])->name('canter.safari');
Route::get('/dhikala-night-stay', [FrontController::class, 'dhikalaNight'])->name('dhikala.night');
Route::get('/cancel-refund-policy', [FrontController::class, 'cancelRefund'])->name('cancel.refund');

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

        // Route::resource('home-page-carousel', HomePageCarouselController::class);
        // Add more authenticated routes here
    });
});
