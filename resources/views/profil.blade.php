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
        <h1>Profil Diri</h1>
    <p>Nama: {{ $nama ?? 'Azka El Fachrizy' }}</p>
    <p>Kelas: {{ $kelas ?? 'XI PPLG 1' }}</p>
    <p>Sekolah: {{ $sekolah ?? 'SMK RADEN UMAR SAID' }}</p>
</x-layout>

