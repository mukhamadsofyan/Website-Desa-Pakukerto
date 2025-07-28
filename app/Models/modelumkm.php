<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class modelumkm extends Model
{
        use HasFactory;

    protected $fillable = [
        'nama_umkm',
        'jenis_usaha',
        'alamat',
        'kontak',
        'deskripsi',
        'foto',
    ];
}
