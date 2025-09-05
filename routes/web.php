<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/', [ProfilController::class, 'index'])->name('home');
Route::get('/home', [ProfilController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
Route::get('/kontak', [ProfilController::class, 'kontak'])->name('kontak');
Route::get('/student', [ProfilController::class, 'student'])->name('student');
