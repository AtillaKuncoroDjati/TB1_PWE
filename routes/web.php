<?php

use App\Http\Controllers\ContohController;
use App\Http\Controllers\ProdukController; // Pastikan mengimpor ProdukController
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route ke ContohController dengan metode tampilContoh
Route::get('/home', [ContohController::class, 'tampilContoh']);

// Route ke ProdukController dengan metode viewProduk untuk menampilkan daftar produk
Route::get('/produk', [ProdukController::class, 'ViewProduk']);

// Route untuk menampilkan form penambahan produk
Route::get('/produk/add', [ProdukController::class, 'ViewAddProduk']);

// Route untuk memproses penambahan produk melalui POST
Route::post('/produk/add', [ProdukController::class, 'CreateProduk']);

// Route untuk menghapus produk berdasarkan kode_produk
Route::delete('/produk/delete/{kode_produk}', [ProdukController::class, 'DeleteProduk']);

// Route untuk menampilkan form edit produk berdasarkan kode_produk
Route::get('/produk/edit/{kode_produk}', [ProdukController::class, 'ViewEditProduk']);

// Route untuk memproses update produk melalui PUT
Route::put('/produk/edit/{kode_produk}', [ProdukController::class, 'UpdateProduk']);
