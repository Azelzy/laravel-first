<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Kontak | Brutalist Design</title>
    <link rel="stylesheet" href="/css/brutalist.css">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container fade-in">
        <h1 class="glitch-text">KONTAK</h1>

        <div class="info-block">
            <p><strong>E-mail:</strong> {{$email}}</p>
            <p><strong>No.Hp:</strong> {{$nomorhp }}</p>
            <p><strong>Github:</strong> {{ $github }}</p>
            <p><strong>Instagram:</strong> {{ $instagram }}</p>
        </div>

        <a href="/" class="btn">Kembali ke Beranda</a>
    </div>
    <script src="/js/brutalist.js"></script>
</body>
</html>
