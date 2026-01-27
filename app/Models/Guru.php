<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    // Pindahkan ke dalam sini sebelum kurung penutup
    protected $fillable = ['nama', 'mapel', 'foto'];
}