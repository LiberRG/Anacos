<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DescubreController;
use App\Http\Controllers\InspiraController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ViveController;
use Illuminate\Support\Facades\Route;


require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
//Route::view('events', 'events.index')->name('events.index');
//Route::view('/', 'map.index')->name('map.index');
//Route::view('vive', 'vive.index')->name('vive.index');
//Route::view('inspira', 'inspira.index')->name('inspira.index');
//Route::view('juego1', 'descubre.juego1')->name('descubre.juego1');
Route::view('juego2', 'descubre.juego2')->name('descubre.juego2');

Route::get('juego1/{lugar?}', [DescubreController::class, 'juego1'])->name('descubre.juego1');
Route::get('vive/{lugar?}', [ViveController::class, 'index'])->name('vive.index');
Route::get('inspira', [InspiraController::class, 'index'])->name('inspira.index');
Route::get('/{lugar?}',[MapController::class,'index'])->name('map.index');

Route::get('limpiar-cache', function(){
    Illuminate\Support\Facades\Artisan::call("cache:clear");
    Illuminate\Support\Facades\Artisan::call("config:clear");
    Illuminate\Support\Facades\Artisan::call("view:clear");
});