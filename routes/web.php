<?php

use App\Http\Controllers\CardapioController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\RegisterController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cardapio', [ProdutosController::class, 'index'])->name('cardapio');
Route::post('/carrinho/store/{produto_id}', [ProdutosController::class, 'store'])->name('adicionar_carrinho');
Route::get('/carrinho/store/{produto_id}', [ProdutosController::class, 'store'])->name('adicionar_carrinho');
Route::get('/carrinho', [ProdutosController::class, 'show'])->name('ver_carrinho');
Route::get('/destroy/{id}', [ProdutosController::class, 'destroy'])->name('carrinho_destroy');
Route::post('/carrinho/finalizar', [ProdutosController::class, 'finalizar'])->name('carrinho_finalizar');
Route::get('/forum', [ForumController::class, 'index'])->name('forum');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/cadastrar', [RegisterController::class, 'registerCliente'])->name('register_cliente');
