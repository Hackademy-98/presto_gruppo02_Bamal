<?php

namespace App\Http\Controllers;

use App\Mail\BecameRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function home(){
        $products = Auth::User()->products->where('is_accepted', null)->sortByDesc('created_at');
        return view('auth.dashboard', compact('products'));
    }

    public function form(){
        return view('auth.contact');
    }
    public function sendemail(Request $request){
        $data = [
        'name'=>$request->name,
        'email'=>$request->email,
        'description'=>$request->description,
        ];
        Mail::to('admin@gmail.com')->send(new BecameRevisor($data));
        return redirect()->route('home')->with('message', 'Grazie per la tua richiesta di diventare revisore.');
    }
}