<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PpdbController extends Controller
{
    public function index()
    {
        $pendaftar = DB::table('ppdb')->latest()->get(); 
        return view('admin.ppdb.index', compact('pendaftar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'  => 'required',
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan'       => 'required',
            'asal_sekolah'  => 'required',
            'nomor_hp'      => 'required',
            'alamat'        => 'required',
        ]);

        try {
            DB::table('ppdb')->insert([
                'nama'           => $request->nama_lengkap,
                'tempat_lahir'   => $request->tempat_lahir,
                'tanggal_lahir'  => $request->tanggal_lahir,
                'jenis_kelamin'  => $request->jenis_kelamin,
                'jurusan'        => $request->jurusan,
                'asal_sekolah'   => $request->asal_sekolah,
                'no_hp'          => $request->nomor_hp,
                'alamat'         => $request->alamat,
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);

            // MODIFIKASI: Arahkan ke halaman sukses
            return redirect('/ppdb/sukses')->with('nama_pendaftar', $request->nama_lengkap);

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        DB::table('ppdb')->where('id', $id)->delete();
        return back()->with('status', 'Data pendaftar berhasil dihapus!');
    }
}