<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\ninjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post("/logout",[authController::class,"logout"])->name("logout");

//guest
Route::middleware('guest')->controller(authController::class)->group( function(){
            Route::get("/register","showRegister")->name("show.register");
            Route::get("/login","showLogin")->name("show.login");
            Route::post("/register","register")->name("register");
            Route::post("/login","login")->name("login");
});


//authenticated
Route::middleware('auth')->controller(ninjaController::class)-> group( function (){
            Route::get('/ninjas', "index")->name('ninjas.index');
            Route::get('/ninjas/create', "create")->name('ninjas.create');
            Route::get('/ninjas/{ninja}', 'show')->name('ninjas.show');
            Route::post('/ninjas', "store")->name('ninjas.store');
            Route::delete('/ninjas/{ninja}', "destroy")->name('ninjas.destroy');
});
