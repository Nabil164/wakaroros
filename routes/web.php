<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'beranda');
Route::view('/sejarah', 'sejarah');
Route::view('/nilai', 'nilai');
Route::view('/katalog', 'katalog');
Route::view('/kontak', 'kontak');

// Tambahan jika ingin akses dummy halaman:
Route::view('/dummy6', 'dummy6');
Route::view('/dummy7', 'dummy7');
Route::view('/dummy8', 'dummy8');
Route::view('/dummy9', 'dummy9');
Route::view('/dummy10', 'dummy10');