<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
{
    $classrooms = Classroom::with('students')->get();
    return view('classroom', [
        'classrooms' => $classrooms,
        'title' => 'Classroom List'  // Add this line
    ]);
}
}
