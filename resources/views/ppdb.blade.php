<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB - SMAN 1 Rimba Melintang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans text-gray-800">

    <nav class="bg-blue-900 p-5 text-white shadow-xl sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="/" class="text-2xl font-bold italic tracking-tight uppercase">SMAN 1 RIMBA MELINTANG</a>
            
            <ul class="hidden md:flex space-x-8 font-medium items-center text-sm">
                <li><a href="/" class="hover:text-yellow-400 transition">Beranda</a></li>
                <li><a href="/profil" class="hover:text-yellow-400 transition">Profil</a></li>
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

                <li><a href="/ppdb" class="text-yellow-400 font-bold border-b-2 border-yellow-400 pb-1">PPDB</a></li>
            </ul>
        </div>
    </nav>

    <div class="bg-blue-800 py-20 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/formal-invitation.png')]"></div>
        <div class="relative z-10 container mx-auto px-4">
            <h2 class="text-4xl md:text-5xl font-extrabold uppercase tracking-tight">Penerimaan Siswa Baru</h2>
            <div class="h-1.5 w-24 bg-yellow-500 mx-auto mt-4 rounded-full"></div>
            <p class="mt-4 text-blue-100 max-w-2xl mx-auto italic text-lg">
                Bergabunglah bersama kami dan wujudkan masa depan gemilang di SMAN 1 Rimba Melintang.
            </p>
        </div>
    </div>

    <div class="container mx-auto py-16 px-6">
        <div class="grid md:grid-cols-2 gap-10">
            <div class="bg-white p-10 rounded-3xl shadow-lg border-l-8 border-blue-900 transform transition hover:-translate-y-1">
                <h3 class="text-2xl font-black mb-6 flex items-center text-blue-900 uppercase tracking-tight">
                    <span class="bg-blue-100 p-3 rounded-2xl mr-4 text-2xl">📝</span> Syarat Pendaftaran
                </h3>
                <ul class="space-y-4 text-gray-600">
                    <li class="flex items-center gap-3 border-b border-gray-50 pb-2">
                        <span class="text-yellow-500 font-bold">✓</span> Fotokopi Ijazah/SKL SMP (Legalisir)
                    </li>
                    <li class="flex items-center gap-3 border-b border-gray-50 pb-2">
                        <span class="text-yellow-500 font-bold">✓</span> Fotokopi Kartu Keluarga (KK)
                    </li>
                    <li class="flex items-center gap-3 border-b border-gray-50 pb-2">
                        <span class="text-yellow-500 font-bold">✓</span> Fotokopi Akta Kelahiran
                    </li>
                    <li class="flex items-center gap-3 border-b border-gray-50 pb-2">
                        <span class="text-yellow-500 font-bold">✓</span> Pas Foto 3x4 (4 Lembar)
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="text-yellow-500 font-bold">✓</span> Print out NISN dari Dapodik
                    </li>
                </ul>
            </div>

            <div class="bg-white p-10 rounded-3xl shadow-lg border-l-8 border-yellow-500 transform transition hover:-translate-y-1">
                <h3 class="text-2xl font-black mb-6 flex items-center text-blue-900 uppercase tracking-tight">
                    <span class="bg-yellow-100 p-3 rounded-2xl mr-4 text-2xl">⚙️</span> Alur Pendaftaran
                </h3>
                <div class="space-y-6 relative">
                    <div class="flex items-start">
                        <span class="bg-blue-900 text-white rounded-xl h-8 w-8 flex items-center justify-center mr-4 mt-1 font-bold shrink-0 shadow-lg">1</span>
                        <div>
                            <p class="font-bold text-gray-800">Registrasi Awal</p>
                            <p class="text-gray-500 text-sm">Mengisi formulir secara online melalui portal atau datang langsung ke sekolah.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-blue-900 text-white rounded-xl h-8 w-8 flex items-center justify-center mr-4 mt-1 font-bold shrink-0 shadow-lg">2</span>
                        <div>
                            <p class="font-bold text-gray-800">Penyerahan Berkas</p>
                            <p class="text-gray-500 text-sm">Membawa dokumen persyaratan asli dan fotokopi ke panitia PPDB.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-blue-900 text-white rounded-xl h-8 w-8 flex items-center justify-center mr-4 mt-1 font-bold shrink-0 shadow-lg">3</span>
                        <div>
                            <p class="font-bold text-gray-800">Verifikasi & Pengumuman</p>
                            <p class="text-gray-500 text-sm">Panitia akan memverifikasi berkas dan mengumumkan hasil seleksi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20 text-center bg-white p-12 rounded-[3rem] shadow-2xl border-4 border-dashed border-blue-100 relative overflow-hidden">
            <div class="relative z-10">
                <h4 class="text-3xl font-black text-blue-900 mb-4 uppercase">Siap Bergabung?</h4>
                <p class="text-gray-500 mb-8 italic text-lg max-w-xl mx-auto">
                    Jadilah bagian dari keluarga besar SMAN 1 Rimba Melintang. Kuota terbatas untuk setiap gelombang.
                </p>
                <a href="/ppdb/daftar" class="bg-yellow-500 text-blue-900 px-12 py-5 rounded-2xl font-black text-xl hover:bg-yellow-400 hover:scale-105 transition duration-300 shadow-[0_10px_20px_rgba(234,179,8,0.3)] inline-block">
                    DAFTAR ONLINE SEKARANG
                </a>
                <p class="mt-6 text-xs text-gray-400 font-medium">Bantuan pendaftaran? Hubungi Panitia: 0812-XXXX-XXXX</p>
            </div>
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