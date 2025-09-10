<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student()
    {
        return view('student',[
            'title' => 'Student'
        ]); // resources/views/student.blade.php
    }
}