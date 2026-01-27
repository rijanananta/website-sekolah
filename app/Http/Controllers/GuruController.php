<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    // 1. Menampilkan daftar guru
    public function index() {
        $semua_guru = Guru::all();
        return view('guru', compact('semua_guru'));
    }

    // 2. Menampilkan form tambah guru
    public function create() {
        return view('admin.tambah_guru');
    }

    // 3. Menyimpan data guru baru (Foto Opsional)
    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'mapel' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048' // 'nullable' membuat foto tidak wajib
        ]);

        $namaFoto = null; // Default jika tidak ada foto
        if ($request->hasFile('foto')) {
            $namaFoto = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('storage/guru'), $namaFoto);
        }

        Guru::create([
            'nama' => $request->nama,
            'mapel' => $request->mapel,
            'foto' => $namaFoto
        ]);

        return redirect('/guru')->with('sukses', 'Guru berhasil ditambah!');
    }

    // 4. Menampilkan halaman edit
    public function edit($id) {
        $guru = Guru::findOrFail($id);
        return view('admin.edit_guru', compact('guru'));
    }

    // 5. Menyimpan perubahan data (Update Foto Opsional)
    public function update(Request $request, $id) {
        $guru = Guru::findOrFail($id);
        
        $request->validate([
            'nama' => 'required',
            'mapel' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Cek jika ada foto baru yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada di folder
            if ($guru->foto && file_exists(public_path('storage/guru/' . $guru->foto))) {
                unlink(public_path('storage/guru/' . $guru->foto));
            }

            $namaFoto = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('storage/guru'), $namaFoto);
            $guru->foto = $namaFoto;
        }

        $guru->nama = $request->nama;
        $guru->mapel = $request->mapel;
        $guru->save();

        return redirect('/guru')->with('sukses', 'Data guru berhasil diupdate!');
    }

    // 6. Menghapus data guru
    public function destroy($id) {
        $guru = Guru::findOrFail($id);

        // Hapus file foto dari folder sebelum menghapus data di database
        if ($guru->foto && file_exists(public_path('storage/guru/' . $guru->foto))) {
            unlink(public_path('storage/guru/' . $guru->foto));
        }

        $guru->delete();
        return redirect('/guru')->with('sukses', 'Data guru berhasil dihapus!');
    }
}