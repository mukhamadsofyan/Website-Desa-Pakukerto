<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
   protected $guarded = [];

   public function rt()
{
    return $this->hasMany(RT::class);
}

public function penduduk()
{
    return $this->hasMany(Penduduk::class);
}
}
