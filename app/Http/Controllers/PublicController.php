<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $products = Product::take(6)->get()->orderBy('created_at');
        return view('home', compact('products'));
    }
}
