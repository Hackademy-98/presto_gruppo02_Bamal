<?php

namespace App\Http\Controllers;

use App\Mail\BecameRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function home(){
        $products = Auth::User()->products;
        return view('auth.dashboard', compact('products'));
    }

    public function form(){
        return view('auth.contact');
    }
    public function sendemail(Request $request){
        Mail::to('admin@gmail.com')->send(new BecameRevisor($request));
    }
}