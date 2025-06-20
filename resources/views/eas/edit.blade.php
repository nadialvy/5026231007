@extends('template')
@section('content')
<div class="container py-4">
    <h3 class="mb-4 fw-bold">Edit My Karyawan</h3>

    <a href="/eas" class="btn btn-secondary mb-4">← Kembali</a>

    @foreach ($karyawan as $k)
        <form action="/eas/update" method="POST" class="border p-4 rounded shadow-sm mb-4 bg-light">
            @csrf
            <input type="hidden" name="kodepegawai" value="{{ $k->kodepegawai }}">

            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required value="{{ ucwords(strtolower($k->namalengkap)) }}">
            </div>

            <div class="mb-3">
                <label for="divisi" class="form-label">Divisi</label>
                <input type="text" class="form-control" id="divisi" name="divisi" required value="{{ $k->divisi }}">
            </div>

            <div class="mb-3">
                <label for="departemen" class="form-label">Departemen</label>
                <input type="text" class="form-control" id="departemen" name="departemen" required value="{{ $k->departemen }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    @endforeach
</div>
@endsection
