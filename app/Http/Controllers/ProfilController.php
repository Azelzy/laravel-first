<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('home');   // resources/views/home.blade.php
    }

    public function profil()
    {
        return view('profil'); // resources/views/profil.blade.php
    }

    public function kontak()
    {
        return view('kontak'); // resources/views/kontak.blade.php
    }
}