<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\ninjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/register",[authController::class,"showRegister"])->name("show.register");
Route::get("/login",[authController::class,"showLogin"])->name("show.login");
Route::post("/register",[authController::class,"register"])->name("register");
Route::post("/login",[authController::class,"login"])->name("login");
Route::get('/ninjas', [ninjaController::class,"index"])->name('ninjas.index');
Route::get('/ninjas/create', [ninjaController::class,"create"])->name('ninjas.create');
Route::get('/ninjas/{ninja}', [ninjaController::class,"show"])->name('ninjas.show');
Route::post('/ninjas', [ninjaController::class,"store"])->name('ninjas.store');
Route::delete('/ninjas/{ninja}', [ninjaController::class,"destroy"])->name('ninjas.destroy');
