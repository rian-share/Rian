<?php

use App\Http\Controllers\dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/buku', [dashboard::class,'lihatbuku']);
Route::get('/anggota', [dashboard::class,'lihatanggota']);
Route::get('/kartu', [dashboard::class,'lihatkartu']);
Route::get('/peminjaman', [dashboard::class,'lihatpeminjaman']);
Route::get('/tambahbuku', [dashboard::class,'tambahbuku']);
Route::get('/hapusbuku/{delete}', [dashboard::class,'hapusbuku']);
Route::post('/simpanbuku', [dashboard::class,'simpanbuku'])->name('simpanbuku');
