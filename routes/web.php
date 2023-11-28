<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login-proses', [UserController::class, 'login_proses'])->name('login-proses');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register-proses', [UserController::class, 'register_proses'])->name('register-proses');

Route::get('/produkcustomer', [ProdukController::class, 'produkcustomer'])->name('produkcustomer');
Route::get('/dashboardadmin', [UserController::class, 'dashboardadmin'])->name('dashboardadmin');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('create-produk');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('create-store');
Route::get('/produk/edit/{id_produk}', [ProdukController::class, 'edit'])->name('edit-produk');
Route::put('/produk/update{id_produk}', [ProdukController::class, 'update'])->name('update-produk');
Route::delete('/produk{id_produk}', [ProdukController::class, 'destroy'])->name('destroyproduk');

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi-create');
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi-store');
Route::get('/transaksi/edit/{jumlah_produk}', [TransaksiController::class, 'edit'])->name('edit-transaksi');
Route::put('/transaksi/update/{jumlah_produk}', [TransaksiController::class, 'update'])->name('update-transaksi');
Route::delete('/transaksi/{jumlah_produk}', [TransaksiController::class, 'destroy'])->name('destroytransaksi');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/create', [userController::class, 'create'])->name('user-create');
Route::post('/user/store', [userController::class, 'store'])->name('user-store');
Route::get('/user/edit{id_user}', [userController::class, 'edit'])->name('user-edit');
Route::put('/user/update{id_user}', [userController::class, 'update'])->name('user-update');
Route::delete('/user/{id_user}', [UserController::class, 'destroy'])->name('destroyuser');
