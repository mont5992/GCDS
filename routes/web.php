<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrivacyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\credentialsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminAuth;



//Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom');
Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom');
Route::get('/credentials', [credentialsController::class, 'credentials'])->name('credentials');

Route::prefix('membership')->name('membership.')->group(function () {

    Route::get('/', [MembershipController::class, 'membership'])->name('membership');
    Route::get('/growth', [MembershipController::class, 'showGrowth'])->name('growth');
    Route::get('/goldunder', [MembershipController::class, 'showgoldunder'])->name('goldunder');
    Route::get('/goldabove', [MembershipController::class, 'showgoldabove'])->name('goldabove');
    Route::get('/grand', [MembershipController::class, 'showgrand'])->name('grand');
    Route::get('/global', [MembershipController::class, 'showglobal'])->name('global');
    Route::get('/general', [MembershipController::class, 'showgeneral'])->name('general');
    Route::get('/assemblie', [MembershipController::class, 'assembliesgod'])->name('assemblie');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/privacy-policy', [PrivacyController::class, 'privacy'])->name('privacy-policy');
Route::get('/faq', [FaqController::class, 'faq'])->name('faq');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/forgot_pass', [ForgotPasswordController::class, 'index'])->name('forgot_pass');
Route::post('/forgot_pass', [ForgotPasswordController::class, 'submit'])->name('forgot_pass.submit');
Route::post('/adminlogin',[AdminController::class, 'index'])->name('admin.login');

Route::get('/globalchurch', [GlobalController::class, 'index'])->name('globalchurch');
Route::get('/globalhub', [GlobalController::class, 'hub'])->name('globalhub');
Route::get('/globallife', [GlobalController::class, 'globallife'])->name('globallife');
Route::middleware([AdminAuth::class])->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/userdata', [AdminController::class, 'userdata'])->name('userdata');  
});
