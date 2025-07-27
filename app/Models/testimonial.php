<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'keterangan',
        'deskripsi_testimonial',
        'rating',
        'foto_testimonial',
        'status'
    ];
}
