<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil; // Pastikan model ini sudah dibuat

class ProfilController extends Controller
{
    // Fungsi ini yang dipanggil oleh rute /admin/profil/edit
    public function edit() 
    {
        $profil = Profil::first() ?? new Profil; 
        return view('admin.edit_profil', compact('profil'));
    }

    public function update(Request $request) 
    {
        $request->validate([
            'nama_kepsek' => 'required',
            'sambutan' => 'required',
            'foto_kepsek' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $profil = Profil::first() ?: new Profil;

        if ($request->hasFile('foto_kepsek')) {
            // Hapus foto lama jika ada di folder storage
            if ($profil->foto_kepsek && file_exists(public_path('storage/profil/' . $profil->foto_kepsek))) {
                unlink(public_path('storage/profil/' . $profil->foto_kepsek));
            }

            $namaFoto = time().'.'.$request->foto_kepsek->extension();
            $request->foto_kepsek->move(public_path('storage/profil'), $namaFoto);
            $profil->foto_kepsek = $namaFoto;
        }

        $profil->nama_kepsek = $request->nama_kepsek;
        $profil->sambutan = $request->sambutan;
        $profil->save();

        return redirect('/dashboard')->with('sukses', 'Profil Berhasil Diperbarui!');
    }
}