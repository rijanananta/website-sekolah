<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Guru - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 py-10">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-blue-900">Input Data Guru</h2>
            <a href="/guru" class="text-sm text-gray-500 hover:underline">← Kembali</a>
        </div>
        
        <form action="/admin/guru/simpan" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block font-bold">Nama Guru</label>
                <input type="text" name="nama" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block font-bold">Mata Pelajaran</label>
                <input type="text" name="mapel" class="w-full border p-2 rounded focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block font-bold">Foto Guru (Opsional)</label>
                {{-- Aturan required dihapus di sini --}}
                <input type="file" name="foto" class="w-full border p-2 rounded">
                <p class="text-xs text-gray-400 mt-1">*Boleh dikosongkan jika belum ada foto.</p>
            </div>
            <button type="submit" class="w-full bg-blue-900 text-white py-3 rounded-lg font-bold hover:bg-blue-800 transition">
                Simpan Guru
            </button>
        </form>
    </div>
</body>
</html>