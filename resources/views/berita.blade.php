<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Sekolah - SMAN 1 Rimba Melintang</title>
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
                <li><a href="/galeri" class="hover:text-yellow-400 transition">Galeri</a></li>
                <li><a href="/guru" class="hover:text-yellow-400 transition">Guru</a></li>
                <li><a href="/berita" class="text-yellow-400 font-bold border-b-2 border-yellow-400">Berita</a></li>
                
                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}" class="bg-blue-700 border border-blue-400 px-4 py-2 rounded-lg hover:bg-blue-600 transition flex items-center gap-2 text-xs">
                                ⚙️ Dashboard
                            </a>
                        </li>
                    @endauth
                @endif

                <li><a href="/ppdb" class="bg-yellow-500 text-blue-900 px-5 py-2 rounded-full font-bold hover:bg-yellow-400 transition shadow-md">PPDB</a></li>
            </ul>
        </div>
    </nav>

    <div class="bg-blue-800 py-16 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/white-diamond.png')]"></div>
        <div class="relative z-10">
            <h2 class="text-4xl md:text-5xl font-extrabold uppercase tracking-widest">Kabar Sekolah</h2>
            <div class="h-1.5 w-24 bg-yellow-500 mx-auto mt-4 rounded-full"></div>
            <p class="mt-4 text-blue-100 italic">Informasi terbaru seputar kegiatan dan prestasi SMAN 1 Rimba Melintang</p>
        </div>
    </div>

    <div class="container mx-auto py-16 px-6">
        <div class="grid md:grid-cols-3 gap-10">
            @forelse($beritas as $item)
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 flex flex-col border border-gray-100">
                    <div class="h-56 overflow-hidden relative">
                        <img src="{{ asset('storage/' . $item->foto) }}" 
                             alt="{{ $item->judul }}" 
                             class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4">
                            <span class="bg-blue-900 text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider shadow-lg">
                                News
                            </span>
                        </div>
                    </div>

                    <div class="p-8 flex-grow">
                        <div class="flex items-center text-gray-400 text-xs mb-3 gap-2">
                            <span>📅 {{ $item->created_at->format('d M Y') }}</span>
                            <span>•</span>
                            <span>By Admin</span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 leading-tight hover:text-blue-700 transition">
                            {{ $item->judul }}
                        </h3>
                        <p class="text-gray-600 mt-4 text-sm leading-relaxed">
                            {{ Str::limit($item->isi, 110) }}
                        </p>
                    </div>

                    <div class="px-8 pb-8">
                        <a href="/berita/{{ $item->id }}" class="flex items-center gap-2 text-blue-900 font-black text-xs uppercase tracking-widest hover:text-yellow-600 transition group">
                            Baca Selengkapnya 
                            <span class="group-hover:translate-x-2 transition-transform">→</span>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-20 bg-white rounded-3xl shadow-inner border-2 border-dashed border-gray-200">
                    <span class="text-5xl block mb-4">🗞️</span>
                    <p class="text-gray-400 text-lg italic">Belum ada berita yang diterbitkan untuk saat ini.</p>
                </div>
            @endforelse
        </div>
    </div>

    <footer class="bg-[#0a0f1d] text-white pt-20 pb-10">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 text-sm">
            
            <div class="space-y-6">
                <h3 class="text-2xl font-bold italic tracking-tight text-white uppercase border-b-2 border-yellow-500 inline-block">SMAN 1 Rimba Melintang</h3>
                <p class="text-gray-400 leading-relaxed text-xs">
                    Sekolah Menengah Atas Negeri unggulan di Rimba Melintang yang berfokus pada kualitas akademik dan pembentukan karakter Islami.
                </p>
                <div class="flex space-x-3 opacity-60">
                    <span class="bg-blue-900 p-2 rounded-lg cursor-pointer hover:bg-yellow-500 transition">🌐</span>
                    <span class="bg-blue-900 p-2 rounded-lg cursor-pointer hover:bg-yellow-500 transition">📸</span>
                    <span class="bg-blue-900 p-2 rounded-lg cursor-pointer hover:bg-yellow-500 transition">▶️</span>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-6 uppercase text-yellow-500 tracking-wider">Kontak Kami</h3>
                <ul class="space-y-4 text-gray-400">
                    <li class="flex items-start gap-3">
                        <span class="text-blue-400">📍</span>
                        <span>Jl. Pendidikan, Rimba Melintang, Rokan Hilir, Riau 28953</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-blue-400">📞</span>
                        <span>(0767) 123456</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-blue-400">📧</span>
                        <span>info@sman1rimel.sch.id</span>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-6 uppercase text-yellow-500 tracking-wider">Tautan Cepat</h3>
                <ul class="space-y-3 text-gray-400">
                    <li><a href="/profil" class="hover:text-yellow-400 transition">Profil Sekolah</a></li>
                    <li><a href="/guru" class="hover:text-yellow-400 transition">Data Guru</a></li>
                    <li><a href="/galeri" class="hover:text-yellow-400 transition">Galeri Foto</a></li>
                    <li><a href="/berita" class="hover:text-yellow-400 transition">Berita Terbaru</a></li>
                    <li><a href="/ppdb" class="hover:text-yellow-400 transition font-bold text-white uppercase">PPDB</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-6 uppercase text-yellow-500 tracking-wider">Informasi</h3>
                <ul class="space-y-3 text-gray-400">
                    <li><p>Senin - Kamis: 07:30 - 15:30</p></li>
                    <li><p>Jumat: 07:30 - 11:30</p></li>
                    <li><p>Sabtu - Minggu: Libur</p></li>
                    <li class="pt-4">
                        <a href="/login" class="bg-white/5 border border-white/10 px-4 py-2 rounded text-[10px] hover:bg-yellow-500 hover:text-blue-900 transition font-bold tracking-widest uppercase">
                            Admin Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container mx-auto px-6 mt-16 pt-8 border-t border-gray-800 text-center">
            <p class="text-gray-500 text-[10px] uppercase tracking-[0.2em]">
                &copy; 2026 SMAN 1 Rimba Melintang. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>