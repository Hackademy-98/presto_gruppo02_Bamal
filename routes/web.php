<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//!Route per la visualizzazione della pagina home
Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/annuncio/crea',[ProductController::class,'create'])->name('products.create');

Route::get('/annuncio/dettaglio/{annuncio}',[ProductController::class,'show'])->name('products.show');






