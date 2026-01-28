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
<body class="bg-slate-50 font-sans text-gray-900">
    
    <div class="bg-white py-4 border-b-2 border-blue-900">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-5">
                <div class="flex-shrink-0">
                    <img src="{{ asset('image/logo.jpeg') }}" alt="Logo SMAN 1 Rimba Melintang" class="h-16 md:h-20 w-auto drop-shadow-sm">
                </div>
                <div class="text-left">
                    <h1 class="text-xl md:text-3xl font-black text-blue-900 uppercase tracking-tight leading-none">
                        SMA Negeri 1 Rimba Melintang
                    </h1>
                    <div class="flex flex-wrap items-center gap-x-4 gap-y-1 mt-1 font-bold uppercase tracking-widest">
                        <p class="text-yellow-600 text-[10px] md:text-xs italic">"Kami yang Terbaik"</p>
                        <span class="hidden md:inline text-gray-300">|</span>
                        <p class="text-gray-400 text-[10px]">NPSN: 10405368</p>
                        <span class="hidden md:inline text-gray-300">|</span>
                        <p class="text-gray-400 text-[10px]">Akreditasi: A</p>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block text-right">
                <p class="text-[10px] text-gray-400 font-bold uppercase tracking-[0.2em]">Rokan Hilir, Provinsi Riau</p>
            </div>
        </div>
    </div>

    <nav class="bg-blue-900 shadow-xl sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-6 h-14">
            <a href="/" class="md:hidden text-white text-sm font-bold tracking-tight uppercase">SMAN 1 Rimel</a>
            
            <ul class="hidden md:flex space-x-8 font-bold items-center text-[11px] text-white uppercase tracking-widest">
                <li><a href="/" class="hover:text-yellow-400 transition-colors">Beranda</a></li>
                <li><a href="/profil" class="hover:text-yellow-400 transition-colors">Profil</a></li>
                <li><a href="/galeri" class="hover:text-yellow-400 transition-colors">Galeri</a></li>
                <li><a href="/guru" class="hover:text-yellow-400 transition-colors">Guru</a></li>
                <li><a href="/berita" class="hover:text-yellow-400 transition-colors">Berita</a></li>
                
                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}" class="text-blue-200 hover:text-white transition text-[10px]">
                                ⚙️ DASHBOARD
                            </a>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="hover:text-yellow-400 transition-colors">Login</a></li>
                    @endauth
                @endif
            </ul>

            <a href="/ppdb" class="bg-yellow-500 text-blue-900 px-5 py-1.5 rounded-full font-black hover:bg-yellow-400 transition shadow-md text-[11px] uppercase tracking-wider">
                PPDB 2026
            </a>
        </div>
    </nav>

    <div class="relative py-16 md:py-24 text-center bg-white border-b overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full opacity-5 pointer-events-none">
            <div class="absolute top-10 left-10 w-64 h-64 bg-blue-600 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-64 h-64 bg-yellow-400 rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4">
            <h2 class="text-4xl md:text-6xl font-black text-blue-900 mb-4 uppercase leading-none tracking-tighter">
                Membangun <span class="text-yellow-500">Generasi Emas</span>
            </h2>
            <p class="text-gray-500 text-base md:text-lg max-w-2xl mx-auto mb-10 leading-relaxed font-medium">
                Selamat Datang di Portal Resmi SMA Negeri 1 Rimba Melintang. <br class="hidden md:block"> 
                Unggul dalam prestasi, santun dalam berperilaku.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/berita" class="bg-blue-900 text-white px-8 py-3.5 rounded-full font-bold text-sm hover:bg-blue-800 shadow-lg transition transform hover:-translate-y-1 uppercase tracking-wider">
                 Lihat Berita Sekolah
                </a>
                <a href="/ppdb" class="bg-white text-blue-900 border-2 border-blue-900 px-8 py-3.5 rounded-full font-bold text-sm hover:bg-blue-50 transition transform hover:-translate-y-1 shadow-lg uppercase tracking-wider">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>

    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12 lg:gap-20">
                <div class="w-full md:w-5/12 lg:w-4/12">
                    <div class="relative group">
                        <div class="absolute -inset-2 bg-yellow-500 rounded-[2.5rem] rotate-3 opacity-20 group-hover:rotate-1 transition-transform"></div>
                        <div class="relative bg-white h-[350px] md:h-[400px] rounded-[2rem] shadow-2xl border-4 border-white overflow-hidden">
                            @if(isset($profil) && $profil->foto_kepsek)
                                <img src="{{ asset('storage/profil/' . $profil->foto_kepsek) }}" alt="Kepala Sekolah" class="w-full h-full object-cover">
                            @else
                                <div class="flex flex-col items-center justify-center h-full text-blue-200 bg-blue-900">
                                    <span class="text-8xl mb-2">👤</span>
                                    <p class="text-[10px] font-bold uppercase tracking-widest text-white">Kepala Sekolah</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                
                <div class="w-full md:w-7/12 lg:w-8/12 text-left">
                    <h3 class="text-yellow-600 font-black text-sm uppercase tracking-[0.3em] mb-3">Kata Sambutan</h3>
                    <h2 class="text-3xl md:text-4xl font-black text-blue-900 mb-6 leading-tight uppercase tracking-tighter">
                        Kepala Sekolah <br> SMAN 1 Rimba Melintang
                    </h2>
                    <div class="relative mb-8">
                        <svg class="absolute -top-6 -left-6 h-12 w-12 text-blue-100 fill-current" viewBox="0 0 32 32"><path d="M10 8v8H6c0 2.2 1.8 4 4 4v2c-3.3 0-6-2.7-6-6V8h6zm12 0v8h-4c0 2.2 1.8 4 4 4v2c-3.3 0-6-2.7-6-6V8h6z"/></svg>
                        <p class="text-gray-600 text-lg leading-relaxed italic relative z-10 pl-6">
                            {{ $profil->sambutan ?? 'Selamat Datang di Portal Resmi SMA Negeri 1 Rimba Melintang. Mari bersama membangun generasi emas yang cerdas dan berkarakter demi masa depan yang lebih gemilang.' }}
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="h-1 w-12 bg-yellow-500"></div>
                        <p class="font-black text-blue-900 text-xl uppercase tracking-tighter">
                            {{ $profil->nama_kepsek ?? 'Nama Kepala Sekolah' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#0f172a] text-white pt-16 pb-8">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12">
            
            <div class="md:col-span-1">
                <h3 class="text-lg font-black uppercase tracking-tighter text-yellow-500 mb-6">SMAN 1 Rimel</h3>
                <p class="text-gray-400 text-xs leading-relaxed font-medium">
                    Mewujudkan insan yang bertaqwa, cerdas, terampil, dan berwawasan lingkungan.
                </p>
            </div>

            <div>
                <h3 class="text-xs font-black mb-6 uppercase text-white tracking-widest border-b border-gray-700 pb-2">Kontak</h3>
                <ul class="space-y-3 text-gray-400 text-[11px] font-medium">
                    <li class="flex items-start gap-2 italic">📍 Jl. Pendidikan, Rimel, Riau</li>
                    <li class="flex items-center gap-2 italic">📞 0811-6040-771</li>
                    <li class="flex items-center gap-2 italic">📧 info@sman1rimel.sch.id</li>
                </ul>
            </div>

            <div>
                <h3 class="text-xs font-black mb-6 uppercase text-white tracking-widest border-b border-gray-700 pb-2">Navigasi</h3>
                <ul class="space-y-2 text-gray-400 font-bold uppercase text-[10px]">
                    <li><a href="/profil" class="hover:text-yellow-400">Profil</a></li>
                    <li><a href="/guru" class="hover:text-yellow-400">Data Guru</a></li>
                    <li><a href="/galeri" class="hover:text-yellow-400">Galeri</a></li>
                    <li><a href="/berita" class="hover:text-yellow-400">Berita</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xs font-black mb-6 uppercase text-white tracking-widest border-b border-gray-700 pb-2">Admin</h3>
                <a href="/login" class="inline-block bg-blue-800 text-white px-6 py-2 rounded text-[10px] font-bold uppercase hover:bg-blue-700 transition">Login Petugas</a>
            </div>

        </div>

        <div class="container mx-auto px-6 mt-16 pt-8 border-t border-gray-800 text-center">
            <p class="text-gray-500 text-[10px] font-bold uppercase tracking-[0.3em]">
                &copy; 2026 SMAN 1 Rimba Melintang.
            </p>
        </div>
    </footer>

</body>
</html>