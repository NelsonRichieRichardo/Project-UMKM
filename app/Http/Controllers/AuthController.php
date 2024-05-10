<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request){
        $remember = !empty($request->remember) ?  true : false;
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password, 'is_admin' => 1], $remember)){
            return redirect('/admin');
        }
        else {
            return redirect()->back()->with('error', "Failed!");
        }

    }
}
