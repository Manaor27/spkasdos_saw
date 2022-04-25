<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;

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
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

    Route::middleware(['dosen'])->group(function () {
        Route::get('dosen', [DosenController::class, 'index']);
        Route::get('kriteria', [DosenController::class, 'kriteria']);
        Route::get('alternatif', [DosenController::class, 'alternatif']);
        Route::get('preferensi', [DosenController::class, 'preferensi']);
        Route::get('matriks', [DosenController::class, 'matriks']);
        Route::get('editKriteria/{id}', [KriteriaController::class, 'edit']);
        Route::put('simpanKriteria/{id}', [KriteriaController::class, 'simpan']);
        Route::get('hapusAlternatif/{id}', [AlternatifController::class, 'hapus']);
    });

    Route::middleware(['mahasiswa'])->group(function () {
        Route::get('mahasiswa', [MahasiswaController::class, 'index']);
    });
});
