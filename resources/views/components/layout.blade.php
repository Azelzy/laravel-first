<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    @vite('resources/css/app.css')
    <!-- Alpine.js for dropdown functionality -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            background-color: #F5F1DC;
            background-image: 
                repeating-linear-gradient(
                    0deg,
                    transparent,
                    transparent 2px,
                    rgba(0, 0, 0, 0.03) 2px,
                    rgba(0, 0, 0, 0.03) 4px
                );
        }
    </style>
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>
        
        @if(session('success'))
            <div class="mx-auto max-w-7xl px-4 py-4">
                <div class="bg-green-100 border-2 border-green-500 text-green-900 px-4 py-3 shadow-[3px_3px_0px_0px_rgba(0,0,0,0.25)]" role="alert">
                    <span class="font-bold">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="mx-auto max-w-7xl px-4 py-4">
                <div class="bg-red-100 border-2 border-red-500 text-red-900 px-4 py-3 shadow-[3px_3px_0px_0px_rgba(0,0,0,0.25)]" role="alert">
                    <span class="font-bold">{{ session('error') }}</span>
                </div>
            </div>
        @endif
        
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
        
        <footer class="mt-12 border-t-4 border-[#FF9013] bg-[#F5F1DC]">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="text-center">
                    <div class="inline-block bg-[#73C8D2] px-4 py-2 shadow-[3px_3px_0px_0px_rgba(0,0,0,0.25)]">
                        <p class="text-[#F5F1DC] font-bold text-sm">*ੈ✩༺𝓗𝓮𝓵𝓵𝓸༻*ੈ✩ </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>