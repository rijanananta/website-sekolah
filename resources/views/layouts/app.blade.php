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
<body class="font-sans antialiased bg-slate-50 flex flex-col min-h-screen text-gray-900">

    <header class="bg-white py-4 border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <img src="{{ asset('image/logo.jpeg') }}" alt="Logo" class="h-14 md:h-16 w-auto">
                <div>
                    <h1 class="text-xl md:text-2xl font-black text-blue-900 uppercase tracking-tight leading-none">
                        SMA Negeri 1 Rimba Melintang
                    </h1>
                    <p class="text-gray-400 font-medium text-[10px] uppercase tracking-wider mt-1">
                        NPSN: 12345678 | Akreditasi: A
                    </p>
                </div>
            </div>
            <div class="hidden lg:block text-right">
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Rokan Hilir, Riau</p>
            </div>
        </div>
    </header>

    <nav class="bg-blue-900 sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-14 items-center">
                <div class="flex space-x-8 text-white text-[11px] font-bold uppercase tracking-wider">
                    <a href="/" class="hover:text-yellow-400 transition-colors">Beranda</a>
                    <a href="/profil" class="hover:text-yellow-400 transition-colors">Profil</a>
                    <a href="/galeri" class="hover:text-yellow-400 transition-colors">Galeri</a>
                    <a href="/guru" class="hover:text-yellow-400 transition-colors">Guru</a>
                    <a href="/berita" class="hover:text-yellow-400 transition-colors">Berita</a>
                </div>

                <div class="flex items-center gap-4">
                    @auth
                        <a href="/dashboard" class="text-white bg-blue-800 px-4 py-1.5 rounded text-[10px] font-bold hover:bg-blue-700 transition">
                            DASHBOARD
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-blue-200 text-[10px] font-bold uppercase hover:text-white">Keluar</button>
                        </form>
                    @else
                        <a href="/login" class="text-white text-[11px] font-bold hover:text-yellow-400 transition">LOGIN</a>
                        <a href="/ppdb" class="bg-yellow-500 text-blue-900 px-4 py-1.5 rounded-full font-black text-[11px] hover:bg-yellow-400 transition shadow-sm">
                            PPDB
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-[#0f172a] text-white pt-12 pb-6 mt-auto border-t-4 border-yellow-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-md font-bold uppercase text-yellow-500 mb-3 tracking-wider">Tentang Sekolah</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">
                        Membangun masa depan gemilang dengan kualitas akademik dan karakter unggul di lingkungan SMAN 1 Rimba Melintang.
                    </p>
                </div>
                <div>
                    <h3 class="text-md font-bold uppercase text-yellow-500 mb-3 tracking-wider">Alamat & Kontak</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">
                        📍 Jl. Pendidikan, Rimba Melintang, Rokan Hilir, Riau<br>
                        📞 (0767) 123456
                    </p>
                </div>
                <div class="md:text-right">
                    <h3 class="text-md font-bold uppercase text-yellow-500 mb-3 tracking-wider">Tautan Cepat</h3>
                    <div class="text-xs text-gray-400 space-y-2 uppercase font-bold tracking-tighter">
                        <a href="/ppdb" class="block hover:text-white">Pendaftaran Siswa Baru</a>
                        <a href="/berita" class="block hover:text-white">Informasi Terbaru</a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-6 text-center">
                <p class="text-gray-500 text-[10px] uppercase tracking-[0.2em] font-bold">
                    &copy; 2026 SMAN 1 Rimba Melintang. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>