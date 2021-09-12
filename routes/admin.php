<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/dash',[Dashboard\DashboardController::class,'index'])->name('dash');

Auth::routes();
