<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('home/index');
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/client', [AdminController::class, 'client']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post ('/kategori/store', [KategoriController::class, 'store']);
Route::get ('/kategori/{id}', [KategoriController::class, 'show']);
Route::get ('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::post ('/kategori/update/{id}', [KategoriController::class, 'update']);
Route::get ('/kategori/delete/{id}', [KategoriController::class, 'delete']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::post ('/produk/store', [ProdukController::class, 'store']);
Route::get ('/produk/{id}', [ProdukController::class, 'show']);
Route::get ('/produk/edit/{id}', [ProdukController::class, 'edit']);
Route::post ('/produk/update/{id}', [ProdukController::class, 'update']);
Route::get ('/produk/delete/{id}', [ProdukController::class, 'delete']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post ('/register/store', [RegisterController::class, 'store']);

Route::get('/test', [LoginController::class, 'test']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginproses'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);



