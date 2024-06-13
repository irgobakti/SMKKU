<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilSekolahController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [BerandaController::class, 'beranda']);

Route::get('/ProfilSekolah', [ProfilSekolahController::class, 'ProfilSekolah']);

Route::get('/Ekstrakurikuler', [EkstrakurikulerController::class, 'Ekstrakurikuler']);

Route::get('/Galeri', [GaleriController::class, 'Galeri']);
