<!-- <!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class = card>

</body>
</html> -->
<x-layout>
 <h3 class="text-xl font-bold">Ini adalah halaman profil</h3>
    <p class="mt-2 text-gray-600">Nama: {{ $nama ?? 'Azka El Fachrizy' }}</p>
    <p class="mt-2 text-gray-600">Kelas: {{ $kelas ?? 'XI PPLG 1' }}</p>
    <p class="mt-2 text-gray-600">Sekolah: {{ $sekolah ?? 'SMK RADEN UMAR SAID' }}</p>
</x-layout>

