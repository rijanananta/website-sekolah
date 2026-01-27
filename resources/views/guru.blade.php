<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Guru - SMAN 1 Rimba Melintang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-gray-800 font-sans">
    
    <nav class="bg-blue-900 p-5 text-white shadow-xl sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="/" class="text-2xl font-bold italic tracking-tight uppercase">SMAN 1 RIMBA MELINTANG</a>
            
            <ul class="hidden md:flex space-x-8 font-medium items-center text-sm">
                <li><a href="/" class="hover:text-yellow-400 transition">Beranda</a></li>
                <li><a href="/profil" class="hover:text-yellow-400 transition">Profil</a></li>
                <li><a href="/galeri" class="hover:text-yellow-400 transition">Galeri</a></li>
                <li><a href="/guru" class="text-yellow-400 font-bold border-b-2 border-yellow-400">Guru</a></li>
                <li><a href="/berita" class="hover:text-yellow-400 transition">Berita</a></li>
                
                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}" class="bg-blue-700 border border-blue-400 px-4 py-2 rounded-lg hover:bg-blue-600 transition flex items-center gap-2 text-xs">
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

    <div class="bg-blue-800 py-16 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/graphy.png')]"></div>
        <div class="relative z-10">
            <h2 class="text-4xl md:text-5xl font-extrabold uppercase tracking-tight">Tenaga Pendidik</h2>
            <div class="h-1.5 w-24 bg-yellow-500 mx-auto mt-4 rounded-full"></div>
            <p class="mt-4 text-blue-100 max-w-2xl mx-auto px-4 italic">Guru-guru berdedikasi tinggi yang siap membimbing dan mencetak generasi emas SMAN 1 Rimba Melintang.</p>
        </div>
    </div>

    <div class="container mx-auto py-20 px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            @forelse($semua_guru as $guru)
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden border-b-8 border-blue-900 group transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl">
                <div class="h-80 bg-gray-200 flex items-center justify-center overflow-hidden relative">
                    @if($guru->foto)
                        <img src="{{ asset('storage/guru/' . $guru->foto) }}" 
                             alt="{{ $guru->nama }}" 
                             class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    @else
                        <div class="text-center">
                            <span class="text-gray-300 text-8xl block mb-2">👤</span>
                            <span class="text-xs text-gray-400 font-medium uppercase tracking-widest">Foto Tidak Tersedia</span>
                        </div>
                    @endif
                    
                    <div class="absolute bottom-4 left-4">
                        <span class="bg-yellow-500 text-blue-900 text-[10px] font-black px-3 py-1 rounded-full shadow-lg uppercase">
                            {{ $guru->mapel }}
                        </span>
                    </div>
                </div>

                <div class="p-6 text-center">
                    <h3 class="text-lg font-black text-blue-900 uppercase leading-tight mb-1 group-hover:text-blue-700 transition">
                        {{ $guru->nama }}
                    </h3>
                    <p class="text-gray-500 text-sm italic mb-4">Tenaga Pendidik</p>
                    
                    @auth
                    <div class="flex justify-center gap-2 pt-4 border-t border-gray-100 mt-2">
                        <a href="/admin/guru/edit/{{ $guru->id }}" class="bg-blue-100 text-blue-700 px-4 py-2 rounded-xl text-[10px] font-bold hover:bg-blue-900 hover:text-white transition-all">
                            EDIT
                        </a>
                        <a href="/admin/guru/hapus/{{ $guru->id }}" 
                           onclick="return confirm('Yakin ingin menghapus data {{ $guru->nama }}?')" 
                           class="bg-red-50 text-red-600 px-4 py-2 rounded-xl text-[10px] font-bold hover:bg-red-600 hover:text-white transition-all">
                            HAPUS
                        </a>
                    </div>
                    @endauth
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-20 bg-white rounded-3xl shadow-inner border-2 border-dashed border-gray-200">
                <p class="text-gray-400 text-lg italic">Data guru belum tersedia atau sedang dalam proses pembaharuan.</p>
            </div>
            @endforelse
        </div>
    </div>

    <footer class="bg-[#0a0f1d] text-white pt-20 pb-10">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 text-sm">
            
            <div class="space-y-6">
                <h3 class="text-2xl font-bold italic tracking-tight text-white uppercase border-b-2 border-yellow-500 inline-block">SMAN 1 Rimba Melintang</h3>
                <p class="text-gray-400 leading-relaxed text-xs md:text-sm">
                    Sekolah Menengah Atas Negeri unggulan di Rimba Melintang yang berfokus pada kualitas akademik dan pembentukan karakter Islami.
                </p>
                <div class="flex space-x-3">
                    <span class="bg-blue-900/50 p-2 rounded-lg cursor-pointer hover:bg-yellow-500 transition">🌐</span>
                    <span class="bg-blue-900/50 p-2 rounded-lg cursor-pointer hover:bg-yellow-500 transition">📸</span>
                    <span class="bg-blue-900/50 p-2 rounded-lg cursor-pointer hover:bg-yellow-500 transition">▶️</span>
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
                        <a href="/login" class="bg-white/5 border border-white/10 px-4 py-2 rounded text-[10px] hover:bg-yellow-500 hover:text-blue-900 transition font-bold">
                            ADMIN LOGIN
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="container mx-auto px-6 mt-16 pt-8 border-t border-gray-800 text-center">
            <p class="text-gray-500 text-[10px] uppercase tracking-widest">
                &copy; 2026 SMAN 1 Rimba Melintang. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>