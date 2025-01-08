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
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

Route::get('/', function () {
    return view('layouts/library');
});

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [BukuController::class, 'index'])->name('home');
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('anggota', AnggotaController::class);
    Route::get('anggota/laporan/cetak', [AnggotaController::class, 'laporan']);
    Route::get('anggota/cari/data', [AnggotaController::class, 'cari']);

    Route::resource('buku', BukuController::class);
    Route::get('buku/laporan/cetak', [BukuController::class, 'laporan']);
    Route::get('buku/cari/data', [BukuController::class, 'cari']);

    Route::resource('peminjaman', PeminjamanController::class);
    Route::get('peminjaman/laporan/cetak', [PeminjamanController::class, 'laporan']);
    Route::get('peminjaman/cari/data', [PeminjamanController::class, 'cari']);

    Route::post('/peminjaman/{id}/kembalikan', [PeminjamanController::class, 'kembalikan'])->name('peminjaman.kembalikan');
    Route::resource('pengembalian', PengembalianController::class);
    Route::get('pengembalian/laporan/cetak', [PengembalianController::class, 'laporan']);
});
