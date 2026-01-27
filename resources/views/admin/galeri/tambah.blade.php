<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Unggah Foto Kegiatan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-xl">
                <div class="bg-blue-900 p-6 text-white">
                    <p class="font-bold uppercase tracking-widest text-sm">Form Galeri Baru</p>
                </div>

                <form action="/admin/galeri/simpan" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
                    @csrf
                    
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Judul Foto / Nama Kegiatan</label>
                        <input type="text" name="judul" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-900 focus:ring-2 focus:ring-blue-900/20 outline-none transition" placeholder="Contoh: Upacara Bendera 17 Agustus" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-bold mb-2">Pilih File Foto</label>
                        <input type="file" name="foto" class="w-full px-4 py-3 rounded-lg border border-gray-300 outline-none file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" required>
                        <p class="text-xs text-gray-400 mt-2 italic">* Disarankan format .jpg atau .png, maksimal 2MB.</p>
                    </div>

                    <div class="pt-4 flex items-center gap-4">
                        <button type="submit" class="flex-1 bg-blue-900 text-white font-extrabold py-4 rounded-xl hover:bg-blue-800 transition-all shadow-lg">
                            💾 SIMPAN KE GALERI
                        </button>
                        <a href="/admin/galeri" class="px-6 py-4 bg-gray-100 text-gray-500 font-bold rounded-xl hover:bg-gray-200 transition">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>