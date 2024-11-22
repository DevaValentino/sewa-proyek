<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;

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
Route::get('/login', [App\Http\Controllers\LoginController::class,'login'])->name('login');
Route::get('/beranda', [App\Http\Controllers\BerandaController::class,'beranda'])->name('beranda');
Route::get('/pesan', [App\Http\Controllers\PesanController::class,'pesan'])->name('pesan');
Route::get('/daftar', [App\Http\Controllers\DaftarController::class,'daftar'])->name('daftar');
Route::get('/paket', [App\Http\Controllers\paketController::class,'paket'])->name('paket');
Route::get('/tampilan', [App\Http\Controllers\TampilanController::class,'tampilan'])->name('tampilan');
Route::get('/alya', [App\Http\Controllers\AlyaController::class,'alya'])->name('alya');