<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
       protected $guarded = [];

       public function rw()
{
    return $this->belongsTo(RW::class);
}

public function penduduk()
{
    return $this->hasMany(Penduduk::class);
}

}
