<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $products = Product::take(6)->orderByDesc('created_at')->get();
        return view('home', compact('products'));
    }
}
