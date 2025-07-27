<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermohonanSurat extends Model
{
    use HasFactory;

    protected $table = 'permohonan_surat';

    protected $fillable = [
        'nama_lengkap',
        'nik',
        'jenis_surat',
        'file_surat',
        'data_lainnya',
    ];

    // Jika ingin otomatis decode data_lainnya JSON menjadi array
    protected $casts = [
        'data_lainnya' => 'array',
    ];
}
