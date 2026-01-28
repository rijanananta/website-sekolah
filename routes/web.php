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

// Tambahkan ini untuk menangani data form

// --- HALAMAN PUBLIK (Bisa diakses siapa saja) ---
Route::get('/', function () {
    $profil = Profil::first();
    return view('welcome', compact('profil'));
});

Route::get('/guru', [GuruController::class, 'index']);
Route::get('/profil', function () { return view('profil'); });
Route::get('/galeri', [GaleriController::class, 'indexPublik']);
Route::get('/berita', [BeritaController::class, 'indexPublik']);
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');
// Ganti Route profil yang lama dengan ini
Route::get('/profil', [ProfilsklhController::class, 'index']);
// --- PPDB (Pendaftaran Peserta Didik Baru) ---
Route::get('/ppdb', function () { 
    return view('ppdb'); 
});

Route::get('/ppdb/daftar', function () { 
    return view('daftar_online'); 
    Route::post('/ppdb/simpan', [PpdbController::class, 'store'])->name('ppdb.simpan');
});


// Route untuk memproses pendaftaran dan mengarahkan ke halaman sukses
Route::post('/ppdb/simpan', function (Request $request) {
    // Di sini nanti kamu bisa tambahkan kodingan untuk simpan ke database
    // Untuk sementara, kita langsung arahkan ke halaman sukses
    return redirect('/ppdb/sukses');
});
Route::post('/ppdb/simpan', [PpdbController::class, 'store'])->name('ppdb.simpan');
// Halaman Sukses
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
    // Pastikan ProfilController sudah punya 'public function edit()'
    Route::get('/admin/profil/edit', [ProfilController::class, 'edit']);
    Route::post('/admin/profil/update', [ProfilController::class, 'update']);

    // Pengelolaan Berita
    Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita');
    Route::get('/admin/berita/tambah', [BeritaController::class, 'create']);
    Route::post('/admin/berita/simpan', [BeritaController::class, 'store']);
    Route::get('/admin/berita/edit/{id}', [BeritaController::class, 'edit']);
    Route::post('/admin/berita/update/{id}', [BeritaController::class, 'update']);
    // Pastikan baris ini ada di dalam group middleware auth
    Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.hapus');
    
    Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('admin.galeri');
    
    // Membuka Form Tambah
    Route::get('/admin/galeri/tambah', [GaleriController::class, 'create']);
    
    // Menjalankan Proses Simpan
    Route::post('/admin/galeri/simpan', [GaleriController::class, 'store']);
    
    // Menjalankan Proses Hapus
    Route::get('/admin/galeri/hapus/{id}', [GaleriController::class, 'destroy']);


    // Jalur untuk edit visi misi
    Route::get('/admin/profilsklh/edit', [ProfilsklhController::class, 'edit']);
    Route::post('/admin/profilsklh/update', [ProfilsklhController::class, 'update']);

// Tambahkan baris ini
    
    // Pastikan ada name('users.index') dan name('users.destroy')
    Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/admin/ppdb/list', [PpdbController::class, 'index'])->name('ppdb.index');
    Route::delete('/admin/ppdb/{id}', [PpdbController::class, 'destroy'])->name('ppdb.destroy');
    
});

require __DIR__.'/auth.php';