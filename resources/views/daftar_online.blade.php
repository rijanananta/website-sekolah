<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran - SMAN 1 Rimba Melintang</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-100">
    <div class="container mx-auto py-10 px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-xl overflow-hidden">
            
            <div class="bg-blue-900 p-8 text-white text-center">
                <div class="inline-block bg-yellow-500 text-blue-900 px-4 py-1 rounded-full text-xs font-bold mb-3 uppercase tracking-widest">
                    PPDB TA 2026/2027
                </div>
                <h2 class="text-3xl font-bold uppercase tracking-tight">
                    Formulir Pendaftaran Online
                </h2>
                <p class="text-blue-200 text-sm mt-2">
                    Lengkapi data diri calon siswa di bawah ini dengan benar.
                </p>
            </div>

            <form action="/ppdb/simpan" method="POST" class="p-8 space-y-6">
                @csrf 
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="text-gray-700 font-bold mb-2 flex items-center">
                            <span class="mr-2">👤</span> Nama Lengkap Siswa
                        </label>
                        <input 
                            type="text" 
                            name="nama_lengkap" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-900 focus:ring-2 focus:ring-blue-900/20 outline-none transition"
                            placeholder="Masukkan nama sesuai ijazah"
                            required
                        >
                    </div>

                    <div>
                        <label class="text-gray-700 font-bold mb-2 flex items-center">
                            <span class="mr-2">🏫</span> Asal Sekolah (SMP/MTs)
                        </label>
                        <input 
                            type="text" 
                            name="asal_sekolah" 
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-900 focus:ring-2 focus:ring-blue-900/20 outline-none transition"
                            placeholder="Nama Sekolah asal"
                            required
                        >
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-gray-700 font-bold mb-2 flex items-center">
                                <span class="mr-2">📞</span> Nomor HP/WhatsApp
                            </label>
                            <input 
                                type="tel" 
                                name="nomor_hp" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-900 focus:ring-2 focus:ring-blue-900/20 outline-none transition"
                                placeholder="08xxxxxxxxxx"
                                required
                            >
                        </div>

                        <div>
                            <label class="text-gray-700 font-bold mb-2 flex items-center">
                                <span class="mr-2">📚</span> Pilihan Jurusan
                            </label>
                            <select 
                                name="jurusan" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-900 focus:ring-2 focus:ring-blue-900/20 outline-none transition bg-white"
                                required
                            >
                                <option value="">-- Pilih Jurusan --</option>
                                <option value="IPA">MIPA (Ilmu Alam)</option>
                                <option value="IPS">IPS (Ilmu Sosial)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-r-lg">
                    <p class="text-sm text-yellow-800 italic">
                        * Setelah klik daftar, silakan datang ke sekolah untuk menyerahkan berkas persyaratan.
                    </p>
                </div>

                <div class="pt-6">
                    <button 
                        type="submit"
                        class="w-full bg-blue-900 text-white font-extrabold py-4 rounded-xl hover:bg-blue-800 transform hover:scale-[1.01] transition-all shadow-xl"
                    >
                        🚀 KIRIM PENDAFTARAN SEKARANG
                    </button>

                    <a href="/ppdb" class="block text-center text-gray-400 mt-6 hover:text-gray-600 transition text-sm font-medium">
                        ← Batal dan Kembali
                    </a>
                </div>
            </form>
        </div>
        
        <p class="text-center text-gray-400 mt-8 text-sm">
            &copy; 2026 PPDB SMAN 1 Rimba Melintang. All rights reserved.
        </p>
    </div>
</body>
</html>