<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMAN 1 Rimba Melintang</title>
    {{-- Menggunakan Vite untuk memanggil CSS Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans">
    
    <div class="bg-white py-6 border-b-4 border-blue-900">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center gap-6">
            <div class="flex-shrink-0">
                <img src="{{ asset('image/logo.jpeg') }}" alt="Logo SMAN 1 Rimba Melintang" class="h-24 w-auto drop-shadow-md">
            </div>
            
            <div class="text-center md:text-left">
                <h1 class="text-3xl md:text-5xl font-black text-blue-900 uppercase tracking-tighter leading-none">
                    SMA Negeri 1 Rimba Melintang
                </h1>
                <div class="flex flex-wrap justify-center md:justify-start gap-x-6 gap-y-1 mt-3 text-gray-600 font-bold text-sm md:text-lg">
                    <p class="flex items-center gap-2">
                        <span class="text-blue-600">NPSN:</span> 10405368
                    </p>
                    <p class="flex items-center gap-2">
                        <span class="text-blue-600">Akreditasi:</span> 
                        <span class="bg-yellow-500 text-blue-900 px-2 py-0.5 rounded text-sm uppercase">A</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <nav class="bg-blue-900 p-4 text-white shadow-xl sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="/" class="md:hidden text-lg font-bold italic tracking-tight uppercase">SMAN 1 Rimba Melintang</a>
            
            <ul class="hidden md:flex space-x-8 font-bold items-center text-sm uppercase tracking-widest">
                <li><a href="/" class="hover:text-yellow-400 transition border-b-2 border-transparent hover:border-yellow-400 pb-1">Beranda</a></li>
                <li><a href="/profil" class="hover:text-yellow-400 transition border-b-2 border-transparent hover:border-yellow-400 pb-1">Profil</a></li>
                <li><a href="/galeri" class="hover:text-yellow-400 transition border-b-2 border-transparent hover:border-yellow-400 pb-1">Galeri</a></li>
                <li><a href="/guru" class="hover:text-yellow-400 transition border-b-2 border-transparent hover:border-yellow-400 pb-1">Guru</a></li>
                <li><a href="/berita" class="hover:text-yellow-400 transition border-b-2 border-transparent hover:border-yellow-400 pb-1">Berita</a></li>
                
                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}" class="bg-blue-700 border border-blue-400 px-4 py-2 rounded-lg hover:bg-blue-600 transition flex items-center gap-2 text-xs">
                                ⚙️ Dashboard
                            </a>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="hover:text-yellow-400 transition border-b-2 border-transparent hover:border-yellow-400 pb-1">Login</a></li>
                    @endauth
                @endif
            </ul>

            <a href="/ppdb" class="bg-yellow-500 text-blue-900 px-6 py-2 rounded-full font-black hover:bg-yellow-400 transition shadow-lg text-sm uppercase">PPDB</a>
        </div>
    </nav>

    <div class="relative py-24 text-center bg-slate-50 border-b overflow-hidden">
        <div class="relative z-10 container mx-auto px-4">
            <h2 class="text-5xl md:text-7xl font-black text-blue-900 mb-4 uppercase leading-none tracking-tighter">
                Membangun <span class="text-yellow-500">Generasi Emas</span>
            </h2>
            <p class="text-gray-500 text-xl md:text-2xl max-w-3xl mx-auto mb-10 leading-relaxed font-medium">
                Selamat Datang di Portal Resmi SMA Negeri 1 Rimba Melintang. Unggul dalam prestasi, santun dalam berperilaku.
            </p>
            
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="/berita" class="bg-blue-900 text-white px-12 py-4 rounded-full font-bold text-lg hover:bg-blue-800 shadow-2xl transition hover:-translate-y-1 inline-block uppercase tracking-wider">
                 Lihat Berita Sekolah
                </a>
                <a href="/ppdb" class="bg-yellow-500 text-blue-900 px-12 py-4 rounded-full font-bold text-lg hover:bg-yellow-400 hover:scale-105 transition shadow-2xl inline-block uppercase tracking-wider">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="w-full md:w-1/3">
                    <div class="bg-blue-100 h-[450px] rounded-[3rem] shadow-2xl border-8 border-white flex items-center justify-center overflow-hidden transform -rotate-2">
                        @if(isset($profil) && $profil->foto_kepsek)
                            <img src="{{ asset('storage/profil/' . $profil->foto_kepsek) }}" alt="Kepala Sekolah" class="w-full h-full object-cover">
                        @else
                            <div class="flex flex-col items-center text-blue-900 italic">
                                <span class="text-8xl mb-2">👤</span>
                                <p class="text-sm font-bold uppercase">Foto Kepala Sekolah</p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="w-full md:w-2/3 text-left">
                    <h3 class="text-yellow-500 font-black text-xl uppercase tracking-[0.3em] mb-2">Sambutan</h3>
                    <h2 class="text-4xl md:text-5xl font-black text-blue-900 mb-8 leading-tight uppercase tracking-tighter">Kepala Sekolah SMAN 1 Rimba Melintang</h2>
                    <div class="relative">
                        <span class="absolute -top-6 -left-4 text-7xl text-blue-100 font-serif">“</span>
                        <p class="text-gray-600 text-xl leading-relaxed mb-8 italic relative z-10 pl-4">
                            {{ $profil->sambutan ?? 'Selamat Datang di Portal Resmi SMA Negeri 1 Rimba Melintang. Mari bersama membangun generasi emas yang cerdas dan berkarakter demi masa depan Rokan Hilir yang lebih gemilang.' }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="h-1 w-12 bg-yellow-500"></div>
                        <p class="font-black text-blue-900 text-2xl uppercase tracking-tighter">
                            {{ $profil->nama_kepsek ?? 'Nama Kepala Sekolah Belum Diatur' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#0a0f1d] text-white pt-20 pb-10">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 text-sm">
            
            <div class="space-y-6">
                <h3 class="text-xl font-black italic tracking-tighter text-white uppercase border-b-4 border-yellow-500 inline-block">SMAN 1 Rimba Melintang</h3>
                <p class="text-gray-400 leading-relaxed font-medium">
                    Sekolah Menengah Atas Negeri unggulan di Rimba Melintang yang berfokus pada kualitas akademik dan pembentukan karakter generasi bangsa yang cerdas dan berintegritas.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-black mb-6 uppercase text-yellow-500 tracking-widest">Hubungi Kami</h3>
                <ul class="space-y-4 text-gray-400 font-medium">
                    <li class="flex items-start gap-3 italic">
                        <span class="text-yellow-500 text-xl">📍</span>
                        <span>Jl. Pendidikan, Rimba Melintang, Rokan Hilir, Riau 28953</span>
                    </li>
                    <li class="flex items-center gap-3 italic">
                        <span class="text-yellow-500 text-xl">📞</span>
                        <span>0811-6040-771</span>
                    </li>
                    <li class="flex items-center gap-3 italic">
                        <span class="text-yellow-500 text-xl">📧</span>
                        <span>info@sman1rimbamelintang.sch.id</span>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-black mb-6 uppercase text-yellow-500 tracking-widest">Navigasi</h3>
                <ul class="space-y-3 text-gray-400 font-bold uppercase text-xs">
                    <li><a href="/profil" class="hover:text-yellow-400 transition">Profil Sekolah</a></li>
                    <li><a href="/guru" class="hover:text-yellow-400 transition">Data Guru</a></li>
                    <li><a href="/galeri" class="hover:text-yellow-400 transition">Galeri Foto</a></li>
                    <li><a href="/berita" class="hover:text-yellow-400 transition">Berita Terbaru</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-black mb-6 uppercase text-yellow-500 tracking-widest">Sistem Admin</h3>
                <ul class="space-y-4 text-gray-400 font-bold uppercase text-xs">
                    <li><a href="/login" class="bg-blue-900 border border-blue-800 px-6 py-3 rounded-lg hover:bg-blue-800 transition block text-center shadow-lg">Login Admin</a></li>
                </ul>
            </div>

        </div>

        <div class="container mx-auto px-6 mt-16 pt-8 border-t border-gray-800 text-center">
            <p class="text-gray-500 text-xs font-bold uppercase tracking-widest">
                &copy; 2026 SMAN 1 Rimba Melintang. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>