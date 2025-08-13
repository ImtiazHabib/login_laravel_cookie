<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthController::class,'show_register_page']);


Route::middleware(['user_cookie'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'show_dashboard']);
});

Route::middleware(['loged_user'])->group(function () {
    Route::get('/login_page',[AuthController::class,'show_login_page']);
});

Route::post('/register_information',[AuthController::class,'register_information']);

Route::post('/login',[AuthController::class,'login_information']);

Route::post('/logout',[AuthController::class,'logout_session']);