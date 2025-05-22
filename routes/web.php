<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product; // Tambahkan ini

// Perbaiki route beranda agar mengirim $products ke view
Route::get('/', function () {
    $products = Product::all();
    return view('pages.beranda', compact('products'));
});

Route::get('/katalog', [ProductController::class, 'index'])->name('katalog');
Route::get('/produk/{id}', [ProductController::class, 'show'])->name('produk.detail');

// Admin - CRUD Produk
Route::get('/admin/dashboard', [ProductController::class, 'adminIndex'])->name('admin.dashboard');
Route::get('/admin/produk', [ProductController::class, 'adminIndex'])->name('admin.produk');
Route::get('/admin/produk/create', [ProductController::class, 'create'])->name('produk.create');
Route::post('/admin/produk', [ProductController::class, 'store'])->name('produk.store');
Route::get('/admin/produk/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
Route::put('/admin/produk/{id}', [ProductController::class, 'update'])->name('produk.update');
Route::delete('/admin/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy');
