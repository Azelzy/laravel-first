<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function profil()
    {
        return view('profil',[
            'title' => 'Profil'
        ]); // resources/views/profil.blade.php
    }
}
