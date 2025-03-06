<?php

use App\Http\Controllers\ninjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ninjas', [ninjaController::class,"index"])->name('ninjas.index');
Route::get('/ninjas/create', [ninjaController::class,"create"])->name('ninjas.create');
Route::get('/ninjas/{id}', [ninjaController::class,"show"])->name('ninjas.show');
Route::post('/ninjas', [ninjaController::class,"store"])->name('ninjas.store');
Route::delete('/ninjas/{id}', [ninjaController::class,"destroy"])->name('ninjas.destroy');
