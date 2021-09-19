<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/dash',[Dashboard\DashboardController::class,'index'])->name('dash');
Route::resource('/categories', Categories\IndexController::class);
Route::resource('/product', Product\IndexController::class);
Route::resource('/about', About\IndexController::class);
Route::resource('/contact', Contact\IndexController::class);
Route::resource('/sliders', Slider\IndexController::class);
Route::resource('/blogs', Blog\IndexController::class);
Route::resource('/settings', Setting\IndexController::class)->except('show');
Auth::routes();
