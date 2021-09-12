<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin', [App\Http\Controllers\Admin\Auth\LoginController::class,'index'])->name('admin');
Route::post('/adminlogin', [App\Http\Controllers\Admin\Auth\LoginController::class,'adminlogin'])->name('adminlogin');
Route::post('/adminlogout', [App\Http\Controllers\Admin\Auth\LoginController::class,'adminlogout'])->name('adminlogout');


Route::get('/clear', function() {
    Artisan::call('cache:clear');
    session()->flash('success',trans('Cache has bees cleared successfully.'));
    return redirect('/');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
