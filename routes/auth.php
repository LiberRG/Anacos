<?php

use App\Http\Controllers\Auth\UserSessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::get('login/{event}', [UserSessionController::class, 'create'])->name('user.login');
    Route::post('login/{event}', [UserSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('cerrar-sesion/{event}', [UserSessionController::class, 'logout'])->name('user.logout');
    Route::post('cerrar-sesion/{event}', [UserSessionController::class, 'destroy']);
});