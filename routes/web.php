<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfileController::class, 'profil'])->name('profil');
Route::get('/kontak', [ContactController::class, 'kontak'])->name('kontak');
Route::get('/student', [StudentController::class, 'index']);
Route::get('/guardians', [GuardianController::class, 'index'])->name('guardians');
Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom');

