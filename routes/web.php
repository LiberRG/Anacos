<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;


require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::view('/', 'map.index')->name('map.index');
Route::view('events', 'events.index')->name('events.index');
Route::view('planea', 'sessions.index')->name('sessions.index');
Route::view('inpirate', 'sessions.view')->name('sessions.view');
Route::view('descubre', 'sessions.view')->name('sessions.view');


Route::get('limpiar-cache', function(){
    Illuminate\Support\Facades\Artisan::call("cache:clear");
    Illuminate\Support\Facades\Artisan::call("config:clear");
    Illuminate\Support\Facades\Artisan::call("view:clear");
});