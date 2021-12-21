<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GangguanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeralatanController;
use App\Http\Controllers\PenangananController;

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
    return view('pages.dashboard');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori.index');
// Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori.index');
Route::resource('kategoris', KategoriController::class);
Route::resource('peralatans', PeralatanController::class);
Route::get('/pengajuans', [GangguanController::class, 'index'])->name('gangguan.index');
Route::post('/pengajuans', [GangguanController::class, 'store'])->name('gangguan.store');
// Route::get('/penanganans', [PenangananController::class, 'index'])->name('penanganan.index');
// Route::get('/penanganans/{$id}', [PenangananController::class, 'edit'])->name('penanganan.edit');
// Route::put('/penanganans/{$id}', [PenangananController::class, 'update'])->name('penanganan.update');
Route::get('/penanganans', [PenangananController::class, 'index'])->name('penanganan.index');
Route::get('/penanganans/{penanganan}/edit', [PenangananController::class, 'edit'])->name('penanganan.edit');
Route::put('/penanganans/{penanganan}', [PenangananController::class, 'update'])->name('penanganan.update');


// Route::resource('pengajuans', GangguanController::class);
