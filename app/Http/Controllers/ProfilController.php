<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        // Halaman beranda
        return view('beranda');
    }

public function profil()
{
    $data = [
        'nama'    => 'AZKA EL FACHRIZY', // ganti dengan nama kamu
        'kelas'   => 'XI PPLG 1',    // ganti kelas kamu
        'sekolah' => 'SMK Bisa Hebat',
    ];

    return view('profil', $data);
}

public function kontak()
{
    $data = [
        'email'    => 'azkaelfachrizy@gmail.com', // ganti dengan nama kamu
        'nomorhp'   => '085741505808',    // ganti kelas kamu
        'github' => 'github.com/azelzy', 
        'instagram' => 'instagram.com/azelzy',
    ];

    return view('kontak', $data);
}

}
