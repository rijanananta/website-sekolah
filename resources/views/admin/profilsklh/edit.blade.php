<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 rounded-2xl shadow-lg border border-yellow-200">
                <h2 class="text-2xl font-bold mb-6 text-yellow-900">⚙️ Edit Visi & Misi</h2>
                
                <form action="/admin/profilsklh/update" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label class="block font-bold mb-2">Visi Sekolah</label>
                        {{-- Ganti $profilsklh menjadi $profil agar sinkron dengan Controller --}}
                        <textarea name="visi" class="w-full border-gray-300 rounded-xl" rows="3">{{ $profil->visi ?? '' }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold mb-2">Misi Sekolah</label>
                        {{-- Ganti $profilsklh menjadi $profil agar sinkron dengan Controller --}}
                        <textarea name="misi" class="w-full border-gray-300 rounded-xl" rows="6">{{ $profil->misi ?? '' }}</textarea>
                    </div>

                    <button type="submit" class="bg-yellow-500 text-blue-900 px-8 py-3 rounded-xl font-bold hover:bg-yellow-400">
                        Simpan Perubahan
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>