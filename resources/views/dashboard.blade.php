<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Selamat Datang, {{ Auth::user()->name }}! 👋</h3>
                    <p class="mb-8 text-gray-600">Pilih menu di bawah ini untuk mengelola data website SMAN 1 Rimba Melintang.</p>

                    {{-- Grid Menu Utama --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                        
                        {{-- 1. Kelola Profil & Kepsek --}}
                        <div class="border rounded-xl p-6 hover:shadow-lg transition bg-yellow-50 border-yellow-200 flex flex-col justify-between">
                            <div>
                                <h4 class="font-bold text-yellow-900 mb-2 text-lg">🏫 Profil Sekolah</h4>
                                <p class="text-sm text-gray-600 mb-4">Visi, Misi, Sejarah, dan Sambutan.</p>
                            </div>
                            <div class="flex flex-col space-y-2 mt-auto">
                                <a href="/admin/profil/edit" class="block bg-yellow-500 text-blue-900 text-center py-2 rounded-md text-sm font-bold hover:bg-yellow-400 shadow-sm">
                                    🏠 Sambutan
                                </a>
                                <a href="/admin/profilsklh/edit" class="block border border-yellow-500 text-yellow-700 text-center py-2 rounded-md text-sm font-bold hover:bg-yellow-100">
                                    ⚙️ Profil
                                </a>
                            </div>
                        </div>

                        {{-- 2. Kelola Guru --}}
                        <div class="border rounded-xl p-6 hover:shadow-lg transition bg-blue-50 border-blue-200 flex flex-col justify-between">
                            <div>
                                <h4 class="font-bold text-blue-900 mb-2 text-lg">👨‍🏫 Data Guru</h4>
                                <p class="text-sm text-gray-600 mb-4">Kelola daftar tenaga pendidik sekolah.</p>
                            </div>
                            <div class="flex flex-col space-y-2 mt-auto">
                                <a href="/admin/guru/tambah" class="bg-blue-600 text-white text-center py-2 rounded-md text-sm font-semibold hover:bg-blue-700 shadow-sm">
                                    + Tambah Guru
                                </a>
                                <a href="/guru" class="text-blue-600 text-center text-sm font-semibold hover:underline">
                                    Lihat Daftar
                                </a>
                            </div>
                        </div>

                        {{-- 3. PPDB (Pendaftaran) --}}
                        <div class="border rounded-xl p-6 hover:shadow-lg transition bg-orange-50 border-orange-200 flex flex-col justify-between">
                            <div>
                                <h4 class="font-bold text-orange-900 mb-2 text-lg">📝 Data PPDB</h4>
                                <p class="text-sm text-gray-600 mb-4">Lihat daftar calon siswa baru.</p>
                            </div>
                            <div class="mt-auto">
                                <a href="/admin/ppdb/list" class="block bg-orange-600 text-white text-center py-2 rounded-md text-sm font-semibold hover:bg-orange-700 shadow-sm">
                                    Cek Pendaftar
                                </a>
                            </div>
                        </div>

                        {{-- 4. Berita & Galeri --}}
                        <div class="border rounded-xl p-6 hover:shadow-lg transition bg-purple-50 border-purple-200 flex flex-col justify-between">
                            <div>
                                <h4 class="font-bold text-purple-900 mb-2 text-lg">📸 Publikasi</h4>
                                <p class="text-sm text-gray-600 mb-4">Update berita dan galeri kegiatan.</p>
                            </div>
                            <div class="flex flex-col space-y-2 mt-auto">
                                <a href="/admin/berita/tambah" class="bg-purple-600 text-white text-center py-2 rounded-md text-sm font-semibold hover:bg-purple-700 shadow-sm">
                                    + Berita
                                </a>
                                <a href="/admin/galeri/tambah" class="bg-purple-400 text-white text-center py-2 rounded-md text-sm font-semibold hover:bg-purple-500 shadow-sm">
                                    + Galeri
                                </a>
                            </div>
                        </div>

                        {{-- 5. KELOLA USER (TAMBAHAN BARU) --}}
                        <div class="border rounded-xl p-6 hover:shadow-lg transition bg-emerald-50 border-emerald-200 flex flex-col justify-between shadow-md ring-2 ring-emerald-100">
                            <div>
                                <h4 class="font-bold text-emerald-900 mb-2 text-lg">👥 Kelola User</h4>
                                <p class="text-sm text-gray-600 mb-4">Tambah admin atau staf pengelola website.</p>
                            </div>
                            <div class="flex flex-col space-y-2 mt-auto">
                                <a href="/register" class="bg-emerald-600 text-white text-center py-2 rounded-md text-sm font-semibold hover:bg-emerald-700 shadow-sm">
                                    + Tambah User
                                </a>
                                <a href="/admin/users" class="text-emerald-700 text-center text-sm font-semibold hover:underline">
                                    Daftar Pengguna
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FOOTER KHUSUS DASHBOARD --}}
    <footer class="mt-auto py-10 bg-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-center md:text-left">
                    <p class="text-sm font-black text-blue-900 uppercase tracking-tighter">
                        SMAN 1 Rimba Melintang
                    </p>
                    <p class="text-xs text-gray-500 uppercase tracking-widest mt-1">
                        Panel Kendali Administrator
                    </p>
                </div>
                
                <div class="text-center md:text-right text-xs text-gray-400 font-medium">
                    <p>&copy; 2026 SMAN 1 Rimba Melintang. All rights reserved.</p>
                    <p class="italic mt-1 text-blue-400">Mencerdaskan Bangsa Melalui Pendidikan Berkualitas.</p>
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>