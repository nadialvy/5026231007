@extends('template')
@section('content')
<div class="container py-4">
    <h3 class="mb-4 fw-bold">Edit Kursi</h3>

    <a href="/pr-pertemuan-14/kursi" class="btn btn-secondary mb-4">← Kembali</a>

    @foreach ($kursi as $k)
        <form action="/pr-pertemuan-14/kursi/update" method="POST" class="border p-4 rounded shadow-sm mb-4 bg-light">
            @csrf
            <input type="hidden" name="ID" value="{{ $k->ID }}">

            <div class="mb-3">
                <label for="merk_kursi" class="form-label">Merk Kursi</label>
                <input type="text" class="form-control" id="merk_kursi" name="merk_kursi" required value="{{ $k->merkkursi }}">
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required value="{{ $k->hargakursi }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Apakah Kursi Tersedia?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="tersedia1" value="1" {{ $k->tersedia == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersedia1">Tersedia</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="tersedia0" value="0" {{ $k->tersedia == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersedia0">Tidak Tersedia</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="berat" class="form-label">Berat (kg)</label>
                <input type="number" class="form-control" id="berat" name="berat" required value="{{ $k->berat }}">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    @endforeach
</div>
@endsection
