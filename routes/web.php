<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\credentialsController;


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

