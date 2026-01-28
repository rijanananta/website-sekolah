<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }} - SMAN 1 Rimel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-gray-900 font-sans">

    <nav class="bg-blue-900 p-4 sticky top-0 z-50 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-4">
            <a href="/berita" class="text-white text-[10px] font-bold uppercase tracking-widest flex items-center gap-2">
                ← Kembali ke Berita
            </a>
            <span class="text-white/50 text-[10px] font-black tracking-tighter uppercase">SMAN 1 Rimba Melintang</span>
        </div>
    </nav>

    <main class="container mx-auto py-12 px-6 max-w-3xl">
        <header class="mb-10 text-center">
            <h1 class="text-3xl md:text-5xl font-black text-blue-900 leading-tight uppercase tracking-tighter mb-4">
                {{ $berita->judul }}
            </h1>
            <div class="flex justify-center items-center text-gray-400 text-[10px] font-bold tracking-[0.2em] uppercase gap-4">
                <span>📅 {{ $berita->created_at->format('d F Y') }}</span>
                <span class="text-yellow-600">Admin SMAN 1 Rimel</span>
            </div>
        </header>

        <div class="rounded-2xl overflow-hidden shadow-xl mb-12 border-4 border-white">
            <img src="{{ asset('storage/' . $berita->foto) }}" class="w-full h-auto object-cover">
        </div>

        <div class="prose prose-blue max-w-none">
            <div class="text-gray-700 leading-relaxed text-lg font-medium space-y-6">
                {!! nl2br(e($berita->isi)) !!}
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-gray-200 py-8 text-center">
        <p class="text-gray-400 text-[9px] font-bold uppercase tracking-widest">
            &copy; 2026 SMAN 1 Rimba Melintang - Rokan Hilir, Riau
        </p>
    </footer>

</body>
</html>