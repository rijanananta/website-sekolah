<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tulis Berita Baru</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-2xl shadow-xl">
                <form action="/admin/berita/simpan" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-5">
                        <label class="block font-bold text-gray-700 mb-2">Judul Berita</label>
                        <input type="text" name="judul" class="w-full rounded-xl border-gray-300 focus:ring-purple-500 focus:border-purple-500" placeholder="Masukkan judul berita..." required>
                    </div>
                    
                    <div class="mb-5">
                        <label class="block font-bold text-gray-700 mb-2">Isi Berita</label>
                        <textarea name="isi" rows="6" class="w-full rounded-xl border-gray-300 focus:ring-purple-500 focus:border-purple-500" placeholder="Tuliskan berita lengkap di sini..." required></textarea>
                    </div>

                    <div class="mb-8">
                        <label class="block font-bold text-gray-700 mb-2">Foto Utama</label>
                        <input type="file" name="foto" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100" required>
                    </div>

                    <div class="flex gap-4">
                        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-xl transition shadow-lg w-full">🚀 TERBITKAN SEKARANG</button>
                        <a href="/dashboard" class="bg-gray-100 hover:bg-gray-200 text-gray-600 font-bold py-3 px-8 rounded-xl transition text-center w-full">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>