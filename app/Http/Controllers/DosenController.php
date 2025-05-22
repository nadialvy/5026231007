<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
  public function index()
  {
    // return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
    $nama = "Nadia Lovely";
    $umur = 15;
    $alamat = "Surabaya";
    $matkul = ["SBD", "MBD"];
    return view("biodata", ['nama' => $nama, 'usia' => $umur, 'alamat' => $alamat, 'matkul' => $matkul]);
  }

  public function welcome()
  {
    return "";
  }
}