<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\StorebeliController;
<<<<<<< HEAD
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HistoryController;
=======
use App\Http\Controllers\AdminController;
>>>>>>> 39b9073f81b150d89d8318e698fe902a07841c30
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('product', ProductController::class);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');
Route::get('/detailproduct/{id}', [StorebeliController::class, 'detailproduct'])->name('detailproduct')->middleware('auth');
Route::get('/beli/{id}', [PembelianController::class, 'beli'])->name('beli')->middleware('auth');
Route::put('/pembayaran/{id}', [PembayaranController::class, 'pembayaran'])->name('pembayaran')->middleware('auth');
<<<<<<< HEAD
Route::get('/history', [HistoryController::class, 'history'])->name('history')->middleware('auth');

=======

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
>>>>>>> 39b9073f81b150d89d8318e698fe902a07841c30
