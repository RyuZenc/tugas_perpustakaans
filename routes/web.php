<?php


use App\Models\Anggota;

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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Models\Peminjaman;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {

    Route::resource('anggota', AnggotaController::class);
    Route::get('anggota/laporan/cetak', [AnggotaController::class, 'laporan']);

    Route::resource('buku', BukuController::class);
    Route::get('buku/laporan/cetak', [BukuController::class, 'laporan']);
    Route::get('buku/cari/data', [BukuController::class, 'cari']);

    Route::resource('peminjaman', PeminjamanController::class);
    Route::get('peminjaman/laporan/cetak', [PeminjamanController::class, 'laporan']);
});
