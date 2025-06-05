@extends('template')
@section('content')
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <divx class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" name="umur" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" class="form-control" required="required"></textarea>
                </div>
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </divx>
    </form>
@endsection
