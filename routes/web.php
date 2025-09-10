<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfileController::class, 'profil'])->name('profil');
Route::get('/kontak', [ContactController::class, 'kontak'])->name('kontak');
Route::get('/student', [StudentController::class, 'index']);

