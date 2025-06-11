@extends('template')
@section('content')
<div class="container py-4">
    <h3 class="mb-4 fw-bold">Tambah Kursi</h3>

    <a href="/pr-pertemuan-14/kursi" class="btn btn-secondary mb-4">← Kembali</a>

    <form action="/pr-pertemuan-14/kursi/add" method="POST" class="border p-4 rounded shadow-sm bg-light">
        @csrf
        <div class="mb-3">
            <label for="merk_kursi" class="form-label">Merk Kursi</label>
            <input type="text" name="merk_kursi" class="form-control" id="merk_kursi" required>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Apakah Kursi Tersedia?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="tersedia1" value="1" required>
                <label class="form-check-label" for="tersedia1">Tersedia</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="tersedia0" value="0" required>
                <label class="form-check-label" for="tersedia0">Tidak Tersedia</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="berat" class="form-label">Berat (kg)</label>
            <input type="number" name="berat" class="form-control" id="berat" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
</div>
@endsection
