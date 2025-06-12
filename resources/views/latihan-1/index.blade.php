@extends('template')
@section('content')
    <div class="container py-5">
        <h3 class="mb-4 fw-bold text-primary border-bottom pb-2">Latihan 1</h3>

        <div class="alert alert-success shadow-sm d-flex align-items-center justify-content-between" style="font-size: 1.2rem;">
            <div>
                <i class="bi bi-people-fill me-2"></i>
                Anda Pengunjung ke: <strong>{{ $jumlah }}</strong>
            </div>
            <span class="badge bg-light text-success">Live Counter</span>
        </div>

        <div class="text-muted mt-3" style="font-size: 0.9rem;">
            Halaman ini mencatat jumlah kunjungan secara otomatis setiap kali diakses atau di-refresh.
        </div>
    </div>
@endsection
