<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manajemen Galeri') }}
            </h2>
            <a href="/admin/galeri/tambah" class="bg-blue-900 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition shadow-lg text-sm font-bold">
                + Tambah Foto
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-xl p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @forelse($galeri as $item)
                        <div class="group relative bg-gray-50 rounded-xl overflow-hidden border border-gray-200 hover:shadow-md transition">
                            <img src="{{ asset('storage/' . $item->foto) }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <p class="text-sm font-bold text-gray-700 truncate">{{ $item->judul }}</p>
                                <a href="/admin/galeri/hapus/{{ $item->id }}" 
                                   onclick="return confirm('Yakin ingin menghapus foto ini?')"
                                   class="mt-3 block text-center text-xs font-bold py-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 transition">
                                   🗑️ Hapus Permanent
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full py-20 text-center bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200">
                            <p class="text-gray-400 italic">Belum ada foto. Klik tombol "Tambah Foto" di atas.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>