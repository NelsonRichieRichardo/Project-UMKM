<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        // Fetch data you want to display in the admin dashboard
        $products = Product::all(); // Example of fetching products

        // Pass the data to the admin dashboard view
        return view('pages.admin.dashboard', compact('products'));
    }

    public function authenticate(Request $request){
        $remember = !empty($request->remember) ?  true : false;
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password, 'roles' => "admin"], $remember)){
            return redirect()->intended('/admin');
        }
        else {
            return redirect()->back()->withErrors('loginFailed');
        }

    }
}
