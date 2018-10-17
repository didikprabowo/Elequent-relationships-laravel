<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
  public function mahasiswa(){
    return $this->belongsToMany(Mahasiswa::class,'ukm_mahasiswas');
  }
}
