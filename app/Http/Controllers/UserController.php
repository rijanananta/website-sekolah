<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengambil semua data user dari database
        return view('admin.users.index', compact('users'));
    }
    public function destroy($id)
{
    $user = User::findOrFail($id);

    // Proteksi agar tidak menghapus diri sendiri
    if (auth()->id() == $user->id) {
        return redirect()->route('users.index')->with('error', 'Anda tidak bisa menghapus akun sendiri!');
    }

    $user->delete();

    // Pastikan diarahkan kembali ke halaman daftar user
    return redirect()->route('users.index')->with('status', 'Pengguna berhasil dihapus!');
}
}