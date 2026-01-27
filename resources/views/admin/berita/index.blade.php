<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Manajemen Berita</h2>
                    <a href="/admin/berita/tambah" class="bg-blue-600 text-white px-4 py-2 rounded-md font-bold hover:bg-blue-700">
                        + Tambah Berita
                    </a>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($beritas as $b)
                        <div class="border rounded-xl p-4 bg-gray-50">
                            <img src="{{ asset('storage/'.$b->foto) }}" class="w-full h-40 object-cover rounded-md mb-4">
                            <h3 class="font-bold text-gray-900 mb-2">{{ $b->judul }}</h3>
                            <p class="text-sm text-gray-600 mb-4">{{ Str::limit($b->isi, 50) }}</p>
                            
                            <form action="{{ route('admin.berita.hapus', $b->id) }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full bg-red-100 text-red-600 py-2 rounded-md font-bold hover:bg-red-200">
                                    🗑️ Hapus Berita
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>