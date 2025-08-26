<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Profil | Brutalist Design</title>
    <link rel="stylesheet" href="/css/brutalist.css">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container fade-in">
        <h1 class="glitch-text">PROFIL AKUH</h1>

        <div class="info-block">
            <p><strong>Nama:</strong> {{ $nama }}</p>
            <p><strong>Kelas:</strong> {{ $kelas }}</p>
            <p><strong>Sekolah:</strong> {{ $sekolah }}</p>
        </div>

        <a href="/" class="btn">Kembali ke Beranda</a>
    </div>
    <script src="/js/brutalist.js"></script>
</body>
</html>