<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.homepage');
    }

    public function catalog(){
        return view('pages.catalog');
    }

    public function login(){
        return view('pages.admin.login');
    }

    public function admin(){
        return view('pages.admin.admin');
    }
}
