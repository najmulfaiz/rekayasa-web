<?php

use App\Http\Controllers\BeritaController;
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
