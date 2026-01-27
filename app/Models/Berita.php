<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // Tambahkan baris ini agar data bisa disimpan
    protected $fillable = ['judul', 'isi', 'foto'];
}