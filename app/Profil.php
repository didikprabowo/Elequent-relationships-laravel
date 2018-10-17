<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
  public function mahasiswa(){
    //mahasiswa di miliki oleh profil
    return $this->BelongsTo(Mahasiswa::class);
  }
}
