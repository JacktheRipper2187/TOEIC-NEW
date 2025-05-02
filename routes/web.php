<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\SertifikatController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta.index');
Route::get('/jadwal', [PesertaController::class, 'index'])->name('jadwal.index');
Route::get('/sertifikat', [PesertaController::class, 'index'])->name('sertifikat.index');
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::post('/pendaftaran', function (Request $request) {
    // Simpan data pendaftaran (bisa ke DB atau tampilkan saja)
    $nama = $request->input('nama');
    $email = $request->input('email');

    return "Pendaftaran Berhasil! Nama: $nama, Email: $email";
})->name('pendaftaran.submit');