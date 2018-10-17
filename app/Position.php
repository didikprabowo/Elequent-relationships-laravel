<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{

    public function mahasiswa(){
      //mahasiswa di miliki oleh profil
      return $this->BelongsTo(Mahasiswa::class,'mahasiswa_id');
    }
}
