<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\SertifikatController;

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

// Grup route dengan prefix {lang?}
Route::group(['prefix' => '{lang?}', 'where' => ['lang' => 'en|id']], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');

    Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta.index');
    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
    Route::get('/sertifikat', [SertifikatController::class, 'index'])->name('sertifikat.index');
});

// Route untuk autentikasi
Auth::routes();

// Route tanpa parameter bahasa
Route::get('/home', 'HomeController@index')->name('home');