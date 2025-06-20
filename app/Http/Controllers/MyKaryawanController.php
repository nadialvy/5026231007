<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{
    public function index()
    {
        $mykaryawan = DB::table('mykaryawan')->paginate(10);
        return view('eas/index', ['mykaryawan' => $mykaryawan]);
    }

    public function edit($kodepegawai)
    {
        $karyawan = DB::table('mykaryawan')
            ->where('kodepegawai', $kodepegawai)
            ->get();

        return view('eas/edit', ['karyawan' => $karyawan]);
    }

    public function update(Request $request)
    {
        DB::table('mykaryawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->nama_lengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);
        return redirect('eas/');
    }

    public function view($kodepegawai)
    {
        $karyawan = DB::table('mykaryawan')
            ->where('kodepegawai', $kodepegawai)
            ->get();

        return view('eas/view', ['karyawan' => $karyawan]);
    }

}
