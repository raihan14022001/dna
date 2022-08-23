<?php

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

Route::get('/', function () {
    return view('welcome');
});



//halaman default
Route::get('/default', function () {
    return view('default.index');
});



// manajemen user
Route::get('/client', function () {
    return view('client.index');
});
Route::get('/member', function () {
    return view('member.index');
});
Route::get('/admin', function () {
    return view('admin.index');
});

// manajemen produk
Route::get('/kategori', function () {
    return view('kategori.index');
});
Route::get('/produk', function () {
    return view('produk.index');
});

// manajemen pesanan
Route::get('/pesanan', function () {
    return view('pesanan.index');
});


// manajemen transaksi
Route::get('/pembayaran', function () {
    return view('pembayaran.index');
});
// Route::get()