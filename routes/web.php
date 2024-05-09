<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PagesController::class, 'home'])->name('homepage');
Route::get('/catalog', [PagesController::class, 'catalog'])->name('catalog');

Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/admin', [PagesController::class, 'admin'])->name('admin');

