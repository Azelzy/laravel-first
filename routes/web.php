<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminClassroomController;
use App\Http\Controllers\Admin\AdminGuardianController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AdminSubjectController;
use App\Http\Controllers\Auth\AuthController;

// Auth Routes - Accessible only when not authenticated
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');
});

// Logout Route - Accessible only when authenticated
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Public Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfileController::class, 'profil'])->name('profil');
Route::get('/kontak', [ContactController::class, 'kontak'])->name('kontak');
Route::get('/student', [StudentController::class, 'index']);
Route::get('/guardians', [GuardianController::class, 'index'])->name('guardians');
Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom');
Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index'])->name('teachers');
Route::get('/subjects', [App\Http\Controllers\SubjectController::class, 'index'])->name('subjects');

// Admin Routes - Protected with auth middleware
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        $totalStudents = \App\Models\Student::count();
        $totalTeachers = \App\Models\Teacher::count();
        $totalClassrooms = \App\Models\Classroom::count();
        $totalSubjects = \App\Models\Subject::count();

        return view('admin.dashboard', compact('totalStudents', 'totalTeachers', 'totalClassrooms', 'totalSubjects'));
    })->name('admin.dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        // Students CRUD
        Route::resource('students', AdminStudentController::class)->except(['show']);

        // Classrooms CRUD
        Route::resource('classrooms', AdminClassroomController::class)->except(['show']);

        // Guardians CRUD
        Route::resource('guardians', AdminGuardianController::class)->except(['show']);

        // Teachers CRUD
        Route::resource('teachers', AdminTeacherController::class)->except(['show']);

        // Subjects CRUD
        Route::resource('subjects', AdminSubjectController::class)->except(['show']);
    });
});
