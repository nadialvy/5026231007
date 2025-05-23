<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
  return view('frontend');
});

Route::get("/satu", function () {
  return view("pertemuansatu");
});

Route::get("/dua", function () {
  return view("pertemuandua");
});

Route::get("/tiga", function () {
  return view("pertemuantiga");
});

Route::get("/empat", function () {
  return view("pertemuanempat");
});

Route::get("/linktree", function () {
  return view("linktree");
});

Route::get("/validasi", function () {
  return view("validasi");
});

Route::get("/uts", function () {
  return view("uts");
});

Route::get("/frontend", function () {
  return view("frontend");
});

Route::get("/dosen", [DosenController::class, 'index']);
Route::get("/welcome", [DosenController::class,"welcome"]);

Route::get("/pegawai/{nama}", [PegawaiController::class, 'index']);

Route::get("/formulir", [PegawaiController::class, 'formulir']);
Route::post("/formulir/proses", [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
