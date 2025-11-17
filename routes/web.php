<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\credentialsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForgotPasswordController;


Route::get('/', [ClassroomController::class, 'index'])->name('classroom');
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
Route::get('/', function () {
    return view('login');
      
});
Route::get('/privacy-policy', function (){
return view('privacy-policy');
});
Route::get('/faq', function(){
    return view('faq');
});
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/about', function(){
    return view('About');
});
Route::get('/forgot_pass', [ForgotPasswordController::class, 'index'])->name('forgot_pass');
Route::post('/forgot_pass', [ForgotPasswordController::class, 'submit'])->name('forgot_pass.submit');