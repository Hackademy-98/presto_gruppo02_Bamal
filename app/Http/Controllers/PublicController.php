<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $products = Product::where('is_accepted', true)->take(4)->orderByDesc('created_at')->get();
        return view('home', compact('products'));
    }
}
