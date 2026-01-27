<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * UNTUK HALAMAN DEPAN (PUBLIK)
     * Ini fungsi yang dicari Laravel di error terakhirmu
     */
    public function indexPublik()
    {
        $galeri = Galeri::latest()->get(); // Ambil data terbaru dari database
        return view('galeri', compact('galeri')); // Kirim ke resources/views/galeri.blade.php
    }

    /**
     * UNTUK HALAMAN ADMIN (DASHBOARD)
     */
    public function index()
    {
        $galeri = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto'  => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('foto')->store('galeri', 'public');

        Galeri::create([
            'judul' => $request->judul,
            'foto'  => $path,
        ]);

        return redirect()->route('admin.galeri')->with('success', 'Foto Berhasil Diunggah!');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        Storage::disk('public')->delete($galeri->foto);
        $galeri->delete();

        return redirect()->back()->with('success', 'Foto Berhasil Dihapus!');
    }
}