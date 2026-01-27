<?php

namespace App\Http\Controllers;

use App\Models\Profilsklh; // Pastikan model ini sudah ada
use Illuminate\Http\Request;

class ProfilsklhController extends Controller
{
    /**
     * Menampilkan profil untuk pengunjung (Halaman Depan)
     * Ini untuk memperbaiki error "Method index does not exist"
     */
    public function index()
    {
        $profil = Profilsklh::first(); 
        return view('profil', compact('profil')); 
    }

    /**
     * Menampilkan form edit untuk Admin
     */
    public function edit()
    {
        $profil = Profilsklh::first() ?? new Profilsklh;
        return view('admin.profilsklh.edit', compact('profil'));
    }

    /**
     * Menyimpan data Visi & Misi baru ke database
     */
    public function update(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $profil = Profilsklh::first() ?? new Profilsklh;
        $profil->visi = $request->visi;
        $profil->misi = $request->misi;
        $profil->save();

        return redirect('/dashboard')->with('success', 'Visi & Misi Berhasil Diperbarui! ✨');
    }
}