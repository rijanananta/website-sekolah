<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SMAN 1 Rimba Melintang</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-50 flex flex-col min-h-screen">

    <header class="bg-white py-6 border-b-4 border-blue-900 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-6">
            <div class="flex-shrink-0">
                <img src="{{ asset('image/logo.jpeg') }}" alt="Logo" class="h-20 w-auto">
            </div>
            <div class="text-center md:text-left">
                <h1 class="text-3xl md:text-4xl font-black text-blue-900 uppercase tracking-tighter leading-none">
                    SMA Negeri 1 Rimba Melintang
                </h1>
                <p class="text-gray-500 font-bold text-xs uppercase tracking-[0.2em] mt-2">
                    NPSN: 12345678 | NSS: 301234567890 | Akreditasi: A
                </p>
            </div>
        </div>
    </header>

    <nav class="bg-blue-900 sticky top-0 z-50 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex space-x-6 text-white text-xs font-black uppercase tracking-widest">
                    <a href="/" class="hover:text-yellow-400 transition">Beranda</a>
                    <a href="/profil" class="hover:text-yellow-400 transition">Profil</a>
                    <a href="/galeri" class="hover:text-yellow-400 transition">Galeri</a>
                    <a href="/guru" class="hover:text-yellow-400 transition">Guru</a>
                </div>

                <div class="flex items-center gap-4">
                    @auth
                        <a href="/dashboard" class="text-white bg-blue-700 px-4 py-2 rounded-lg text-xs font-bold hover:bg-blue-600 transition">
                            DASHBOARD
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-red-400 text-xs font-bold uppercase">Keluar</button>
                        </form>
                    @else
                        <a href="/login" class="text-white text-xs font-bold">LOGIN</a>
                        <a href="/ppdb" class="bg-yellow-500 text-blue-900 px-5 py-2 rounded-full font-black text-xs hover:bg-yellow-400 transition">PPDB</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-[#0a0f1d] text-white pt-16 pb-8 mt-auto border-t-8 border-yellow-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-12">
            <div>
                <h3 class="text-lg font-black uppercase border-b-2 border-yellow-500 inline-block mb-4">SMAN 1 Rimba Melintang</h3>
                <p class="text-gray-400 text-sm leading-relaxed">Membangun masa depan gemilang dengan kualitas akademik dan karakter Islami.</p>
            </div>
            <div>
                <h3 class="text-sm font-black uppercase text-yellow-500 mb-4 tracking-widest">Kontak SMAN 1 Rimel</h3>
                <p class="text-gray-400 text-sm leading-relaxed italic">
                    📍 Jl. Pendidikan, Rimba Melintang, Rokan Hilir, Riau<br>
                    📞 (0767) 123456
                </p>
            </div>
            <div class="text-center md:text-right">
                <p class="text-gray-500 text-[10px] uppercase tracking-widest font-bold">
                    &copy; 2026 SMAN 1 Rimba Melintang. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>