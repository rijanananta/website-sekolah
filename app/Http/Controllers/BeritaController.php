<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // 1. Menampilkan daftar berita untuk admin (Manajemen Berita)
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    // 2. Menampilkan halaman publik (Daftar Berita untuk Pengunjung)
    public function indexPublik()
    {
        $beritas = Berita::latest()->get();
        return view('berita', compact('beritas'));
    }

    // 3. MENAMPILKAN DETAIL BERITA (INI YANG TADI HILANG/BELUM ADA)
    public function show($id)
    {
        $berita = Berita::findOrFail($id); // Mencari berita berdasarkan ID
        return view('berita-detail', compact('berita'));
    }

    // 4. Form tambah berita
    public function create()
    {
        return view('admin.berita.tambah');
    }

    // 5. Proses simpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi'   => 'required',
            'foto'  => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('foto')->store('berita', 'public');

        Berita::create([
            'judul' => $request->judul,
            'isi'   => $request->isi,
            'foto'  => $path,
        ]);

        return redirect('/admin/berita')->with('success', 'Berita Berhasil Terbit! 🚀');
    }

    // 6. Fungsi hapus berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        
        // Hapus foto dari folder storage jika ada
        if ($berita->foto) {
            Storage::disk('public')->delete($berita->foto);
        }
        
        $berita->delete();

        return redirect()->back()->with('success', 'Berita Berhasil Dihapus!');
    }
}