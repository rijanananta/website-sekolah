<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg border border-yellow-200">
                <h2 class="text-2xl font-bold mb-6 text-yellow-900">⚙️ Edit Visi & Misi</h2>
                
                <form action="/admin/profilsklh/update" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label class="block font-bold mb-2">Visi Sekolah</label>
                        {{-- Sinkron dengan Controller --}}
                        <textarea name="visi" class="w-full border-gray-300 rounded-xl focus:border-yellow-500 focus:ring-yellow-500" rows="3">{{ $profil->visi ?? '' }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold mb-2">Misi Sekolah</label>
                        {{-- Sinkron dengan Controller --}}
                        <textarea name="misi" class="w-full border-gray-300 rounded-xl focus:border-yellow-500 focus:ring-yellow-500" rows="6">{{ $profil->misi ?? '' }}</textarea>
                    </div>

                    <div class="flex items-center gap-4">
                        {{-- Tombol Simpan --}}
                        <button type="submit" class="bg-yellow-500 text-blue-900 px-8 py-3 rounded-xl font-bold hover:bg-yellow-400 shadow-sm transition">
                            Simpan 
                        </button>

                        {{-- Tombol Batal --}}
                        <a href="/dashboard" class="bg-gray-100 text-gray-700 px-8 py-3 rounded-xl font-bold hover:bg-gray-200 transition text-center">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>