<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  public function profil(){
    //setiap profil memiliki satu mahasiswa
    return $this->hasOne(Profil::class,'mahasiswa_id');
  }
  public function position(){
    //setiap profil memiliki satu mahasiswa
    return $this->hasMany(Position::class);
  }
  public function ukm(){
    return $this->belongsToMany(Ukm::class,'ukm_mahasiswas');
  }
}
