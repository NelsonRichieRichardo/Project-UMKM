<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PagesController::class, 'home'])->name('homepage');
Route::get('/catalog', [PagesController::class, 'catalog'])->name('catalog');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/menu', [PagesController::class, 'menu'])->name('menu');

Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');

Route::group(['middleware' => 'admin'], function() {
    Route::resource('products', ProductController::class);
    Route::get('/admin', [ProductController::class, 'index'])->name('admin.dashboard')->middleware('auth');
    Route::post('/products/{product_id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

