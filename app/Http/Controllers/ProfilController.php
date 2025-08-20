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
        'nama'    => 'Budi Sanjaya', // ganti dengan nama kamu
        'kelas'   => 'XI PPLG 1',    // ganti kelas kamu
        'sekolah' => 'SMK Bisa Hebat',
    ];

    return view('profil', $data);
}

public function kontak()
{
    return view('kontak');
}

}
