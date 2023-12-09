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

Route::get('encuentra', [DescubreController::class, 'encuentra'])->name('descubre.encuentra');
Route::get('empareja', [DescubreController::class, 'empareja'])->name('descubre.empareja');
Route::get('vive/{filtro?}/{lugar?}', [ViveController::class, 'index'])->name('vive.index');
Route::get('inspira', [InspiraController::class, 'index'])->name('inspira.index');
Route::get('/{lugar?}',[MapController::class,'index'])->name('map.index');


Route::get('limpiar-cache', function(){
    Illuminate\Support\Facades\Artisan::call("cache:clear");
    Illuminate\Support\Facades\Artisan::call("config:clear");
    Illuminate\Support\Facades\Artisan::call("view:clear");
});
