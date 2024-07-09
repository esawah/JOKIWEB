<?php

// routes/web.php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;

// Rute untuk halaman landing
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Rute untuk halaman paslon
Route::get('/paslon', [PaslonController::class, 'index'])->name('paslon');

// Rute untuk halaman kategori
Route::get('/kategori', function () {
    return view('pages.kategori');
})->name('kategori');

// Rute untuk halaman riwayat
Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');

// Rute untuk resource peserta
Route::resource('peserta', PesertaController::class)->parameters([
    'peserta' => 'peserta'
]);

// Rute untuk menyimpan vote
Route::post('/store-vote', [VoteController::class, 'store'])->name('storeVote');
