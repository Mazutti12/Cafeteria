<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/cardapio', [CardapioController::class, 'index'])->name('cardapio');
Route::get('/forum', [ForumController::class, 'index'])->name('forum');
Route::get('/login', [LoginController::class, 'index'])->name('register');
Route::get('/register', [RegisterController::class, 'index'])->name('login');
