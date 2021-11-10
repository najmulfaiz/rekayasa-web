<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HarapanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', [
        'title' => 'Beranda'
    ]);
})->name('beranda');

Route::get('/profil', function () {
    return view('profil', [
        'title' => 'Profil',
        'nama' => 'Muhammad Najmul Faiz',
        'nim' => '201953032'
    ]);
})->name('profil');

Route::get('/kontak', function () {
    return view('kontak', [
        'title' => 'Kontak'
    ]);
})->name('kontak');

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'show']);

Route::get('/harapan', [HarapanController::class, 'index']);
Route::get('/harapan/{slug}', [HarapanController::class, 'show']);