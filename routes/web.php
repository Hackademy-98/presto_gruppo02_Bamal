<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RevisorController;

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


//Rotta Dashboard
Route::get('/dashboard', [UserController::class, 'home'])->name('auth.dashboard');


//Rotta Home del revisore
Route::get('home/revisore', [RevisorController::class, 'index'] )-> middleware('isRevisor')->name('revisor.index');

//Rotta per accettare annuncio
Route::patch('annuncio/accetta/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.acceptAnnouncement');
//Rotta per rifiutare annuncio
Route::patch('annuncio/rifiuta/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.rejectAnnouncement');


