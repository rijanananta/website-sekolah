<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Calon Siswa Baru (PPDB)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-t-4 border-orange-500">
                <div class="mb-6 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold text-orange-900">📝 Daftar Pendaftar Online</h3>
                        <p class="text-sm text-gray-600">Berikut adalah data siswa yang mengisi formulir pendaftaran di website.</p>
                    </div>
                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-bold">
                        Total: {{ $pendaftar->count() }} Pendaftar
                    </span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-max">
                        <thead>
                            <tr class="bg-orange-50 text-orange-900 uppercase text-xs">
                                <th class="p-4 border-b">Nama Calon Siswa</th>
                                <th class="p-4 border-b">TTL</th>
                                <th class="p-4 border-b text-center">JK</th>
                                <th class="p-4 border-b">Jurusan</th>
                                <th class="p-4 border-b">Asal Sekolah</th>
                                <th class="p-4 border-b">No. WhatsApp</th>
                                <th class="p-4 border-b">Alamat</th>
                                <th class="p-4 border-b text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pendaftar as $siswa)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="p-4 border-b font-medium text-gray-800">{{ $siswa->nama }}</td>
                                <td class="p-4 border-b text-gray-600 text-xs">
                                    {{ $siswa->tempat_lahir }}, <br>
                                    {{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d M Y') }}
                                </td>
                                <td class="p-4 border-b text-center text-gray-600">{{ $siswa->jenis_kelamin == 'Laki-laki' ? 'L' : 'P' }}</td>
                                <td class="p-4 border-b">
                                    <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-[10px] font-bold uppercase">
                                        {{ $siswa->jurusan }}
                                    </span>
                                </td>
                                <td class="p-4 border-b text-gray-600">{{ $siswa->asal_sekolah }}</td>
                                <td class="p-4 border-b">
                                    <a href="https://wa.me/{{ $siswa->no_hp }}" target="_blank" class="text-green-600 hover:underline font-bold inline-flex items-center">
                                        {{ $siswa->no_hp }} 
                                    </a>
                                </td>
                                <td class="p-4 border-b text-gray-600 text-xs max-w-xs truncate" title="{{ $siswa->alamat }}">
                                    {{ $siswa->alamat }}
                                </td>
                                <td class="p-4 border-b text-center">
                                    <form action="{{ route('ppdb.destroy', $siswa->id) }}" method="POST" onsubmit="return confirm('Hapus data pendaftar ini?')">
                                        @csrf @method('DELETE')
                                        <button class="bg-red-50 text-red-600 hover:bg-red-600 hover:text-white px-3 py-1 rounded text-[10px] font-bold uppercase transition">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="p-10 text-center text-gray-400 italic">Belum ada siswa yang mendaftar.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>