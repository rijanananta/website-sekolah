<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah - SMAN 1 Rimba Melintang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans text-gray-800">

    <nav class="bg-blue-900 p-5 text-white shadow-xl sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="/" class="text-2xl font-bold italic tracking-tight uppercase">SMAN 1 RIMBA MELINTANG</a>
            
            <ul class="hidden md:flex space-x-8 font-medium items-center text-sm">
                <li><a href="/" class="hover:text-yellow-400 transition">Beranda</a></li>
                <li><a href="/profil" class="text-yellow-400 font-bold border-b-2 border-yellow-400 pb-1">Profil</a></li>
                <li><a href="/galeri" class="hover:text-yellow-400 transition">Galeri</a></li>
                <li><a href="/guru" class="hover:text-yellow-400 transition">Guru</a></li>
                <li><a href="/berita" class="hover:text-yellow-400 transition">Berita</a></li>
                
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

    <div class="bg-blue-900 py-20 text-white text-center relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/pinstripe-dark.png')]"></div>
        <div class="relative z-10 container mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter">Profil Sekolah</h1>
            <div class="h-1.5 w-24 bg-yellow-500 mx-auto mt-6 rounded-full"></div>
            <p class="mt-6 text-yellow-400 font-medium italic text-xl">Mengenal Lebih Dekat SMAN 1 Rimba Melintang</p>
        </div>
    </div>

    <div class="container mx-auto py-20 px-6">
        
        <div class="max-w-4xl mx-auto mb-24">
            <h2 class="text-3xl font-black text-blue-900 uppercase mb-8 flex items-center">
                <span class="h-1 w-16 bg-yellow-500 mr-4 rounded-full"></span> Sejarah Singkat
            </h2>
            <div class="bg-white p-10 rounded-[2rem] shadow-xl border-t-8 border-blue-900 text-gray-700 leading-relaxed text-lg italic">
                <p>SMAN 1 Rimba Melintang didirikan dengan semangat untuk mencerdaskan generasi bangsa di wilayah Rokan Hilir, Riau. Melalui perjalanan panjang, kami terus bertransformasi menjadi institusi yang tidak hanya unggul dalam prestasi akademik, tetapi juga dalam pembentukan karakter siswa yang religius dan kompetitif.</p>
            </div>
        </div>

        <div class="max-w-5xl mx-auto mb-24">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-black text-blue-900 uppercase tracking-tight">Visi & Misi</h2>
                <p class="text-gray-400 mt-2">Landasan filosofis pergerakan pendidikan kami</p>
            </div>
            
            <div class="bg-gradient-to-br from-blue-900 to-blue-800 text-white p-12 rounded-[3rem] shadow-2xl mb-12 text-center border-b-8 border-yellow-500">
                <h3 class="text-sm font-black mb-4 tracking-[0.3em] text-yellow-400 uppercase">Visi Sekolah</h3>
                <p class="text-3xl md:text-4xl font-extrabold italic leading-tight">
                    "{{ $profil->visi ?? 'Menjadi Sekolah Unggul, Berkarakter, dan Berwawasan Lingkungan.' }}"
                </p>
            </div>

            <div class="bg-white border-2 border-blue-50 p-10 rounded-[3rem] shadow-xl relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-5 text-9xl font-black">MISI</div>
                <h3 class="text-2xl font-black text-blue-900 mb-8 inline-block border-b-4 border-yellow-500 uppercase tracking-tighter">Misi Sekolah</h3>
                <ul class="space-y-6 text-gray-700 relative z-10">
                    @if($profil && $profil->misi)
                        @foreach(explode("\n", $profil->misi) as $index => $poin)
                            @if(trim($poin) !== "")
                                <li class="flex items-start group">
                                    <span class="bg-blue-900 text-white rounded-2xl h-10 w-10 flex items-center justify-center mr-6 text-lg font-black flex-shrink-0 shadow-lg group-hover:bg-yellow-500 transition-colors">
                                        {{ $index + 1 }}
                                    </span>
                                    <span class="text-xl font-medium leading-relaxed group-hover:text-blue-900 transition-colors">{{ trim($poin) }}</span>
                                </li>
                            @endif
                        @endforeach
                    @else
                        <li class="text-gray-400 italic text-center py-10">Data misi belum diperbarui oleh admin.</li>
                    @endif
                </ul>
            </div>
        </div>

        <div class="max-w-6xl mx-auto mb-24">
            <h2 class="text-3xl font-black text-blue-900 uppercase mb-12 text-center">Fasilitas Utama</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group bg-white p-8 rounded-3xl shadow-lg text-center border-b-4 border-transparent hover:border-yellow-500 hover:shadow-2xl transition-all duration-300">
                    <div class="text-5xl mb-6">🏫</div>
                    <h3 class="font-black text-xl mb-3 text-blue-900 uppercase">Ruang Kelas</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Dilengkapi dengan Smart TV dan AC untuk menunjang kenyamanan belajar siswa.</p>
                </div>
                <div class="group bg-white p-8 rounded-3xl shadow-lg text-center border-b-4 border-transparent hover:border-yellow-500 hover:shadow-2xl transition-all duration-300">
                    <div class="text-5xl mb-6">🔬</div>
                    <h3 class="font-black text-xl mb-3 text-blue-900 uppercase">Laboratorium</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Laboratorium IPA, Komputer, dan Bahasa dengan standar nasional terbaru.</p>
                </div>
                <div class="group bg-white p-8 rounded-3xl shadow-lg text-center border-b-4 border-transparent hover:border-yellow-500 hover:shadow-2xl transition-all duration-300">
                    <div class="text-5xl mb-6">📚</div>
                    <h3 class="font-black text-xl mb-3 text-blue-900 uppercase">Perpustakaan</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Koleksi ribuan buku dan akses e-library untuk memperluas cakrawala literasi.</p>
                </div>
            </div>
        </div>

        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-black text-blue-900 mb-10 uppercase">Struktur Organisasi</h2>
            <div class="bg-white p-6 rounded-[2rem] shadow-2xl border-4 border-dashed border-blue-50 group">
                <img src="{{ asset('images/struktur.png') }}" alt="Struktur Organisasi" class="mx-auto rounded-2xl group-hover:opacity-90 transition cursor-zoom-in">
                <p class="mt-6 text-gray-400 text-xs font-medium uppercase tracking-widest italic">Klik gambar untuk memperbesar struktur</p>
            </div>
        </div>
    </div>

    <footer class="bg-[#0a0f1d] text-white pt-20 pb-10 mt-20">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 text-sm">
            
            <div class="space-y-6">
                <h3 class="text-2xl font-bold italic tracking-tight text-white uppercase border-b-2 border-yellow-500 inline-block">SMAN 1 Rimba melintang</h3>
                <p class="text-gray-400 leading-relaxed text-xs">
                    Pencetak generasi cerdas dan berkarakter di Rokan Hilir. Kami berkomitmen memberikan kualitas pendidikan terbaik bagi putra-putri daerah.
                </p>
                <div class="flex space-x-3 opacity-80">
                    <span class="bg-blue-900 p-2 rounded-lg cursor-pointer hover:bg-yellow-500 transition">🌐</span>
                    <span class="bg-blue-900 p-2 rounded-lg cursor-pointer hover:bg-yellow-500 transition">📸</span>
                    <span class="bg-blue-900 p-2 rounded-lg cursor-pointer hover:bg-yellow-500 transition">▶️</span>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-6 uppercase text-yellow-500 tracking-wider">Kontak Sekolah</h3>
                <ul class="space-y-4 text-gray-400 text-xs">
                    <li class="flex items-start gap-3">
                        <span class="text-blue-400">📍</span>
                        <span>Jl. Pendidikan, Rimba Melintang, Rokan Hilir, Riau 28953</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-blue-400">📞</span>
                        <span>0811-6040-771</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-blue-400">📧</span>
                        <span>info@sman1rimel.sch.id</span>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-6 uppercase text-yellow-500 tracking-wider">Tautan Cepat</h3>
                <ul class="space-y-3 text-gray-400 text-xs">
                    <li><a href="/profil" class="hover:text-yellow-400 transition">Profil Sekolah</a></li>
                    <li><a href="/guru" class="hover:text-yellow-400 transition">Data Guru</a></li>
                    <li><a href="/galeri" class="hover:text-yellow-400 transition">Galeri Foto</a></li>
                    <li><a href="/berita" class="hover:text-yellow-400 transition">Berita Terbaru</a></li>
                    <li><a href="/ppdb" class="hover:text-yellow-400 transition font-bold text-white uppercase tracking-tighter">PPDB Online</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold mb-6 uppercase text-yellow-500 tracking-wider">Info Tambahan</h3>
                <ul class="space-y-3 text-gray-400 text-xs">
                    <li><p>Akreditasi: <span class="text-white font-bold uppercase">Unggul (A)</span></p></li>
                    <li><p>NPSN: 10405368</p></li>
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