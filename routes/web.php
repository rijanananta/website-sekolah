<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfilController;
use App\Models\Profil;
use Illuminate\Http\Request; 
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilsklhController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PpdbController;

// --- HALAMAN PUBLIK (Bisa diakses siapa saja) ---
Route::get('/', function () {
    $profil = Profil::first();
    return view('welcome', compact('profil'));
});

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/profil', [ProfilsklhController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'indexPublik']);
Route::get('/berita', [BeritaController::class, 'indexPublik']);
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

// --- PPDB (Pendaftaran Peserta Didik Baru) ---
Route::get('/ppdb', function () { 
    return view('ppdb'); 
});

Route::get('/ppdb/daftar', function () { 
    return view('daftar_online'); 
});

Route::post('/ppdb/simpan', [PpdbController::class, 'store'])->name('ppdb.simpan');

Route::get('/ppdb/sukses', function () {
    return view('ppdb_sukses');
});


// --- HALAMAN ADMIN (Wajib Login) ---
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Pengelolaan Guru
    Route::get('/admin/guru/tambah', [GuruController::class, 'create']);
    Route::post('/admin/guru/simpan', [GuruController::class, 'store']);
    Route::get('/admin/guru/edit/{id}', [GuruController::class, 'edit']);
    Route::post('/admin/guru/update/{id}', [GuruController::class, 'update']);
    Route::get('/admin/guru/hapus/{id}', [GuruController::class, 'destroy']);

    // Pengelolaan Profil Kepsek
    Route::get('/admin/profil/edit', [ProfilController::class, 'edit']);
    Route::post('/admin/profil/update', [ProfilController::class, 'update']);

    // Pengelolaan Berita
    Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita');
    Route::get('/admin/berita/tambah', [BeritaController::class, 'create']);
    Route::post('/admin/berita/simpan', [BeritaController::class, 'store']);
    Route::get('/admin/berita/edit/{id}', [BeritaController::class, 'edit']);
    Route::post('/admin/berita/update/{id}', [BeritaController::class, 'update']);
    Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.hapus');
    
    // Pengelolaan Galeri
    Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('admin.galeri');
    Route::get('/admin/galeri/tambah', [GaleriController::class, 'create']);
    Route::post('/admin/galeri/simpan', [GaleriController::class, 'store']);
    Route::get('/admin/galeri/hapus/{id}', [GaleriController::class, 'destroy']);

    // Pengelolaan Profil Sekolah (Visi Misi)
    Route::get('/admin/profilsklh/edit', [ProfilsklhController::class, 'edit']);
    Route::post('/admin/profilsklh/update', [ProfilsklhController::class, 'update']);
    
    // Pengelolaan Users
    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    // Pengelolaan PPDB
    Route::get('/admin/ppdb/list', [PpdbController::class, 'index'])->name('ppdb.index');
    Route::delete('/admin/ppdb/{id}', [PpdbController::class, 'destroy'])->name('ppdb.destroy');
});

// --- JALUR RAHASIA BUAT ADMIN (Hapus setelah berhasil) ---
Route::get('/gas-buat-admin', function () {
    $user = \App\Models\User::updateOrCreate(
        ['email' => 'admin@gmail.com'],
        [
            'name' => 'Admin Utama',
            'password' => bcrypt('admin123'),
        ]
    );
    return "Selamat! Akun admin berhasil dibuat atau diperbarui. <br> Email: admin@gmail.com <br> Password: admin123 <br><br> <a href='/login'>Klik di sini untuk Login</a>";
});

require __DIR__.'/auth.php';