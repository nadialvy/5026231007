<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\KursiController;
use App\Http\Controllers\MyKaryawanController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\Latihan1Controller;
use App\Http\Controllers\KaryawanDBController;

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
Route::get("/welcome", [DosenController::class, "welcome"]);

// Route::get("/pegawai/{nama}", [PegawaiController::class, 'index']);

Route::get("/formulir", [PegawaiController::class, 'formulir']);
Route::post("/formulir/proses", [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

// route tugas CRUD
Route::get('/pr-pertemuan-14/kursi', [KursiController::class, 'index']);
Route::get('/pr-pertemuan-14/kursi/tambah', [KursiController::class, 'redirect_add']);
Route::post('/pr-pertemuan-14/kursi/add', [KursiController::class, 'add']);
Route::get('/pr-pertemuan-14/kursi/edit/{id}', [KursiController::class, 'edit']);
Route::post('/pr-pertemuan-14/kursi/update', [KursiController::class, 'update']);
Route::get('/pr-pertemuan-14/kursi/delete/{id}', [KursiController::class, 'delete']);
Route::get('/pr-pertemuan-14/kursi/search', [KursiController::class, 'search']);
// analytics kursi
Route::get('/pr-pertemuan-14/kursi/analytics', [KursiController::class, 'getAnalytics']);

// tugas latihan 1
Route::get('/latihan-1', [Latihan1Controller::class, 'index']);

// tugas latihan 2
Route::get('/karyawan', [KaryawanDBController::class, 'indexKaryawan']);
Route::get('/karyawan/tambah', [KaryawanDBController::class, 'tambahKaryawan']);
Route::post('/karyawan/store', [KaryawanDBController::class, 'storeKaryawan']);
Route::get('/karyawan/hapus/{id}', [KaryawanDBController::class, 'hapusKaryawan']);

Route::get('/karyawan-3', [KaryawanDBController::class, 'indexKaryawan']);
Route::get('/karyawan-3/tambah', [KaryawanDBController::class, 'tambahKaryawan']);
Route::post('/karyawan-3/store', [KaryawanDBController::class, 'storeKaryawan']);
Route::get('/karyawan-3/hapus/{id}', [KaryawanDBController::class, 'hapusKaryawan']);

// eas
Route::get('/eas', [MyKaryawanController::class, 'index']);
Route::get('/eas/edit/{id}', [MyKaryawanController::class, 'edit']);
Route::post('/eas/update', [MyKaryawanController::class, 'update']);
Route::get('/eas/view/{id}', [MyKaryawanController::class, 'view']);
