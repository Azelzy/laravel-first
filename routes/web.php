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

// Admin Routes
Route::prefix('admin')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        $totalStudents = \App\Models\Student::count();
        $totalTeachers = \App\Models\Teacher::count();
        $totalClassrooms = \App\Models\Classroom::count();
        $totalSubjects = \App\Models\Subject::count();
        
        return view('admin.dashboard', compact('totalStudents', 'totalTeachers', 'totalClassrooms', 'totalSubjects'));
    })->name('admin.dashboard');

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

// Fallback to dashboard if just /dashboard is accessed
Route::get('/dashboard', function () {
    return redirect('/admin/dashboard');
});