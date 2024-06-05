<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    public function home(){
        return view('pages.homepage');
    }

    public function catalog(){
        $products = Product::all();
        return view('pages.catalog', compact('products'));
    }

    public function login(){
        return view('pages.admin.login');
    }

    public function admin(){
        return view('pages.admin.dashboard');
    }
    public function menu(){
        return view('pages.menu');
    }

    public function about(){
        return view('pages.about');
    }
}
