<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Profil;
use App\Position;
use App\Ukm;
class Universitas extends Controller
{
    public function index(){
      $mahasiswa = Mahasiswa::get();
      $profil = Profil::get();
      return view('mahasiswa',compact('mahasiswa','profil'));
    }
    public function position(){
      $position = Position::all();
      $mahasiswa = Mahasiswa::all();
      return view('positon',compact('position','mahasiswa'));
    }
    public function ukm(){
      $ukm = Ukm::all();
      $mahasiswa = Mahasiswa::all();
      return view('ukm',compact('ukm','mahasiswa'));
    }

    public function insert_prodi_mahasiswa(){
        $mahasiswa = Mahasiswa::find(3);
        $mahasiswa->ukm()->attach(['1','2','3']);
        return "Success Insert Mahasiswa in UKM";
    }
}
