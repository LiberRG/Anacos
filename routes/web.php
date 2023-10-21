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
Route::view('/', 'events.index')->name('events.index');
Route::view('login', 'auth.login')->name('login');
Route::view('recuperar-contrasena', 'auth.forgot-password')->name('password.request');
Route::view('busqueda', 'sessions.index')->name('sessions.index');
Route::view('sesion', 'sessions.view')->name('sessions.view');
// TODO: hay seis vistas diseñadas, pero la de: «Para poder acceder al contenido debe…» aún no la hacemos porque no sé si la vamos a hacer como una ventana emergente o como una vista única

Route::get('limpiar-cache', function(){
    Illuminate\Support\Facades\Artisan::call("cache:clear");
    Illuminate\Support\Facades\Artisan::call("config:clear");
    Illuminate\Support\Facades\Artisan::call("view:clear");
});