<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/admin', [App\Http\Controllers\Admin\Auth\LoginController::class,'index'])->name('admin');
Route::post('/adminlogin', [App\Http\Controllers\Admin\Auth\LoginController::class,'adminlogin'])->name('adminlogin');
Route::post('/adminlogout', [App\Http\Controllers\Admin\Auth\LoginController::class,'adminlogout'])->name('adminlogout');


Route::get('/clear', function() {
    Artisan::call('cache:clear');
    session()->flash('success',trans('Cache has bees cleared successfully.'));
    return redirect('/');
});
Auth::routes();

Route::get('/', [App\Http\Controllers\Site\Home\IndexController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\Site\About\IndexController::class, 'index'])->name('about');
Route::get('/project', [App\Http\Controllers\Site\Category\IndexController::class, 'index'])->name('category');
Route::get('/project/{id}', [App\Http\Controllers\Site\Category\IndexController::class, 'show'])->name('category');
Route::get('/blog', [App\Http\Controllers\Site\Blog\IndexController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [App\Http\Controllers\Site\Blog\IndexController::class, 'show'])->name('blog');
Route::get('/product/{id}', [App\Http\Controllers\Site\Product\IndexController::class, 'show'])->name('product');
Route::get('/contact', [App\Http\Controllers\Site\Contact\IndexController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\Site\Contact\IndexController::class, 'store'])->name('contact');
