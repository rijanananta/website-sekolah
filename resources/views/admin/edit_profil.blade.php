<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil - SMAN 1 Rimba Melintang</title>
    {{-- Menambahkan CDN langsung agar CSS pasti terload --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 py-10 font-sans">
    <div class="max-w-3xl mx-auto px-4">
        <div class="mb-6">
            <a href="/dashboard" class="text-blue-600 hover:text-blue-800 flex items-center gap-2 text-sm font-semibold transition">
                <span>⬅</span> Kembali ke Dashboard
            </a>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-200">
            <div class="bg-blue-900 px-8 py-6">
                <h2 class="text-2xl font-black text-white uppercase tracking-tight">Edit Profil Kepala Sekolah</h2>
                <p class="text-blue-200 text-sm mt-1">Perbarui informasi sambutan dan foto kepala sekolah untuk halaman beranda.</p>
            </div>

            <form action="/admin/profil/update" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
                @csrf
                
                <div class="space-y-2">
                    <label class="block text-sm font-black text-slate-700 uppercase tracking-wider">Nama Lengkap & Gelar</label>
                    <div class="relative">
                        <input type="text" name="nama_kepsek" value="{{ $profil->nama_kepsek }}" 
                            placeholder="Contoh: Nama Kepsek, S.Pd, M.Pd"
                            class="w-full pl-4 pr-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition outline-none" 
                            required>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-black text-slate-700 uppercase tracking-wider">Sambutan Kepala Sekolah</label>
                    <textarea name="sambutan" 
                        class="w-full border border-slate-300 rounded-xl p-4 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition outline-none" 
                        rows="6" placeholder="Tuliskan kata sambutan hangat untuk pengunjung website..."
                        required>{{ $profil->sambutan }}</textarea>
                    <p class="text-xs text-slate-400 italic font-medium">*Sambutan ini akan muncul di bagian depan website (Beranda).</p>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-black text-slate-700 uppercase tracking-wider">Foto Kepala Sekolah</label>
                    <div class="flex flex-col md:flex-row items-center gap-6 p-6 bg-slate-50 rounded-xl border-2 border-dashed border-slate-200">
                        <div class="w-32 h-32 rounded-lg overflow-hidden bg-slate-200 border-2 border-white shadow-md flex-shrink-0">
                            @if($profil->foto_kepsek)
                                <img src="{{ asset('storage/profil/' . $profil->foto_kepsek) }}" class="w-full h-full object-cover">
                            @else
                                <div class="flex items-center justify-center h-full text-slate-400">No Image</div>
                            @endif
                        </div>
                        
                        <div class="flex-1 w-full">
                            <input type="file" name="foto_kepsek" 
                                class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-bold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200 cursor-pointer">
                            <p class="text-xs text-slate-400 mt-2 font-medium">Format: JPG, PNG, atau JPEG.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-4 flex flex-col md:flex-row gap-3">
                    <button type="submit" class="flex-1 bg-blue-900 text-white py-4 rounded-xl font-black uppercase tracking-widest hover:bg-blue-800 shadow-lg transition">
                        Simpan Perubahan
                    </button>
                    <a href="/dashboard" class="px-8 py-4 bg-slate-100 text-slate-600 rounded-xl font-bold uppercase tracking-widest hover:bg-slate-200 transition text-center">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>