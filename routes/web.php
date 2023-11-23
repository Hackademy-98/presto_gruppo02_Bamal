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

Route::get('/annuncio/dettaglio/{product}',[ProductController::class,'show'])->name('products.show');

Route::get('/annuncio/categoria/{category}', [ProductController::class,'filterByCategory'])->name('products.filterByCategory');

Route::get('/annunci', [ProductController::class, 'index'])->name('index');




