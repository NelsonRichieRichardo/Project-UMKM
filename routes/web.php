<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PagesController::class, 'home'])->name('homepage');
Route::get('/catalog', [PagesController::class, 'catalog'])->name('catalog');

