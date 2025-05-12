<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\SertifikatController;
use Illuminate\Support\Facades\Auth;

// ✅ Auth routes
Auth::routes();

// ✅ Halaman umum (guest)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

// ✅ Route pendaftaran peserta (guest, boleh tanpa login)
Route::get('/pendaftaran', function () {
    return view('pendaftaran'); // ini adalah file: resources/views/pendaftaran.blade.php
})->name('pendaftaran');

// Proses simpan data pendaftaran
Route::post('/pendaftaran/store', [PesertaController::class, 'store'])->name('pendaftaran.store');

// Peserta Index
Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta.index');

// Route untuk menampilkan detail peserta
Route::get('/peserta/{id}', [PesertaController::class, 'show'])->name('peserta.show');

// Route untuk menampilkan form edit peserta
Route::get('/peserta/{id}/edit', [PesertaController::class, 'edit'])->name('peserta.edit');

// Route untuk menyimpan perubahan data peserta
Route::put('/peserta/{id}', [PesertaController::class, 'update'])->name('peserta.update');

// Route untuk menghapus data peserta
Route::delete('/peserta/{id}', [PesertaController::class, 'destroy'])->name('peserta.destroy');

// ✅ Route ubah bahasa (guest juga boleh)
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');

// ✅ Route khusus user yang sudah login (admin/panitia)
Route::middleware(['auth'])->group(function () {
    // Home setelah login
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Profile user yang login
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Daftar peserta (hanya admin/panitia yg bisa lihat)
    Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta.index');

    // Jadwal (untuk admin/panitia)
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');

    // Sertifikat (untuk admin/panitia)
    Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat.index');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

