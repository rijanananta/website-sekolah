<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pengguna Sistem') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Alert Status --}}
            @if (session('status'))
                <div class="mb-4 p-4 bg-emerald-100 border border-emerald-400 text-emerald-700 rounded-lg">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border border-emerald-200">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h3 class="text-lg font-bold text-emerald-900">👥 Pengguna Terdaftar</h3>
                        <p class="text-sm text-gray-600">Daftar admin dan staf yang memiliki akses ke panel ini.</p>
                    </div>
                    <a href="/register" class="bg-emerald-600 text-white px-4 py-2 rounded-lg text-sm font-bold hover:bg-emerald-700 shadow-sm transition">
                        + Tambah Baru
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-emerald-50 text-emerald-900 uppercase text-xs shadow-sm">
                                <th class="p-4 border-b">Nama</th>
                                <th class="p-4 border-b">Email</th>
                                <th class="p-4 border-b">Tanggal Bergabung</th>
                                <th class="p-4 border-b text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach ($users as $user)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="p-4 border-b font-medium">{{ $user->name }}</td>
                                <td class="p-4 border-b">{{ $user->email }}</td>
                                <td class="p-4 border-b text-sm">{{ $user->created_at->format('d M Y') }}</td>
                                <td class="p-4 border-b text-center">
                                    {{-- Form Hapus yang Sudah Diperbaiki --}}
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800 font-bold text-xs uppercase p-2 hover:bg-red-50 rounded-md transition">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-6">
                    <a href="/dashboard" class="text-sm text-gray-500 hover:underline">← Kembali ke Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>