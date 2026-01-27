<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - SMAN 1 Rimba Melintang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans">
    
    <nav class="bg-blue-900 p-5 text-white shadow-xl sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="/" class="text-2xl font-bold italic tracking-tight uppercase">SMAN 1 RIMBA MELINTANG</a>
            
            <ul class="hidden md:flex space-x-8 font-medium items-center text-sm">
                <li><a href="/" class="hover:text-yellow-400 transition">Beranda</a></li>
                <li><a href="/profil" class="hover:text-yellow-400 transition">Profil</a></li>
                <li><a href="/galeri" class="text-yellow-400 font-bold border-b-2 border-yellow-400">Galeri</a></li>
                <li><a href="/guru" class="hover:text-yellow-400 transition">Guru</a></li>
                <li><a href="/berita" class="hover:text-yellow-400 transition">Berita</a></li>
                
                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}" class="bg-blue-700 border border-blue-400 px-4 py-2 rounded-lg hover:bg-blue-600 transition flex items-center gap-2">
                                ⚙️ Dashboard
                            </a>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="hover:text-yellow-400 transition">Login</a></li>
                    @endauth
                @endif

                <li><a href="/ppdb" class="bg-yellow-500 text-blue-900 px-5 py-2 rounded-full font-bold hover:bg-yellow-400 transition shadow-md">PPDB</a></li>
            </ul>
        </div>
    </nav>

    <div class="bg-blue-800 py-20 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="relative z-10">
            <h2 class="text-5xl font-extrabold uppercase tracking-widest">Galeri Kegiatan</h2>
            <p class="mt-4 text-blue-100 italic text-xl">Dokumentasi momen berharga di SMAN 1 Rimba Melintang</p>
        </div>
    </div>

    <div class="container mx-auto py-16 px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            
            @forelse($galeri as $item)
                <div class="group bg-white p-4 rounded-3xl shadow-lg hover:shadow-2xl transition duration-500 transform hover:-translate-y-2">
                    <div class="overflow-hidden rounded-2xl h-72 bg-gray-200 shadow-inner">
                        <img src="{{ asset('storage/' . $item->foto) }}" 
                             alt="{{ $item->judul }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-in-out">
                    </div>
                    <div class="mt-6 px-2">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-xs font-bold text-blue-600 uppercase tracking-tighter bg-blue-50 px-3 py-1 rounded-full">Kegiatan</span>
                            <span class="text-gray-400 text-xs flex items-center gap-1">
                                📅 {{ $item->created_at->format('d M Y') }}
                            </span>
                        </div>
                        <h4 class="font-extrabold text-xl text-gray-800 leading-tight group-hover:text-blue-900 transition">{{ $item->judul }}</h4>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-32 bg-white rounded-3xl shadow-inner border-2 border-dashed border-gray-200">
                    <span class="text-6xl mb-4 block">📸</span>
                    <p class="text-gray-400 text-xl italic font-medium">Belum ada koleksi foto saat ini. Silakan cek kembali nanti.</p>
                </div>
            @endforelse

        </div>
    </div>

    <footer class="bg-[#0a0f1d] text-white pt-20 pb-10">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 text-sm">
            
            <div class="space-y-6">
                <h3 class="text-2xl font-bold italic tracking-tight text-white uppercase border-b-2 border-yellow-500 inline-block">SMAN 1 Rimba Melintang</h3>
                <p class="text-gray-400 leading-relaxed">
                    Sekolah Menengah Atas Negeri unggulan di Rimba Melintang yang berfokus pada kualitas akademik dan pembentukan karakter Islami.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="bg-blue-900 p-2 rounded-full hover:bg-yellow-500 transition">🌐</a>
                    <a href="#" class="bg-blue-900 p-2 rounded-full hover:bg-yellow-500 transition">📸</a>
                    <a href="#" class="bg-blue-900 p-2 rounded-full hover:bg-yellow-500 transition">▶️</a>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-6 uppercase text-yellow-500">Kontak Kami</h3>
                <ul class="space-y-4 text-gray-400">
                    <li class="flex items-start gap-3">
                        <span>📍</span>
                        <span>Jl. Pendidikan, Rimba Melintang, Rokan Hilir, Riau 28953</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span>📞</span>
                        <span>(0767) 123456</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span>📧</span>
                        <span>info@sman1rimel.sch.id</span>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-6 uppercase text-yellow-500">Tautan Cepat</h3>
                <ul class="space-y-3 text-gray-400">
                    <li><a href="/profil" class="hover:text-yellow-400 transition">Profil Sekolah</a></li>
                    <li><a href="/guru" class="hover:text-yellow-400 transition">Data Guru</a></li>
                    <li><a href="/galeri" class="hover:text-yellow-400 transition">Galeri Foto</a></li>
                    <li><a href="/berita" class="hover:text-yellow-400 transition">Berita Terbaru</a></li>
                    <li><a href="/ppdb" class="hover:text-yellow-400 transition font-bold text-white">Pendaftaran PPDB</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-6 uppercase text-yellow-500">Informasi</h3>
                <ul class="space-y-3 text-gray-400">
                    <li><p>Senin - Kamis: 07:30 - 15:30</p></li>
                    <li><p>Jumat: 07:30 - 11:30</p></li>
                    <li><p>Sabtu - Minggu: Libur</p></li>
                    <li class="pt-4 text-center md:text-left">
                        <a href="/login" class="bg-white/10 border border-white/20 px-4 py-2 rounded text-xs hover:bg-white/20 transition">
                            Admin Login
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="container mx-auto px-6 mt-16 pt-8 border-t border-gray-800 text-center">
            <p class="text-gray-500 text-xs">
                &copy; 2026 SMAN 1 Rimba Melintang. All rights reserved. <br>
                <span class="italic font-light mt-2 block opacity-50 italic">"Membangun Masa Depan Gemilang dengan Ilmu dan Iman"</span>
            </p>
        </div>
    </footer>

</body>
</html>