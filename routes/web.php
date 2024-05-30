<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\ListProdukController;

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
    return view('list_product');
});


Route::get('/list_product', [ListProductController::class, 'tampilkan']);
Route::get('/listproduk',  [ListProdukController::class, 'show']);
Route::post('/listproduk',  [ListProdukController::class, 'simpan'])->name('produk.simpan');