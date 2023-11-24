<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home(){
        $products = Auth::User()->products;
        return view('auth.dashboard', compact('products'));
    }
}
