<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Use App\Http\Controllers\ProfileController;
Use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
Use App\Http\Controllers\StudentController;

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);
Route::get('/profil', [ProfileController::class, 'profil'])->name('profil');
Route::get('/kontak', [ContactController::class, 'kontak'])->name('kontak');
Route::get('/student', [StudentController::class, 'student'])->name('student');
