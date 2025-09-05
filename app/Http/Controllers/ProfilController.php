<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home'
        ]);   // resources/views/home.blade.php
    }

    public function profil()
    {
        return view('profil',[
            'title' => 'Profil'
        ]); // resources/views/profil.blade.php
    }

    public function kontak()
    {
        return view('kontak',[
            'title' => 'Kontak'
        ]); // resources/views/kontak.blade.php
    }

    public function student()
    {
        return view('student',[
            'title' => 'Student'
        ]); // resources/views/student.blade.php
    }
}