
@extends('template')
@section('content')
    <div class="mb-4">
        <h3 class="px-4" style="font-weight: 800;">Manajemen My Karyawan</h3>
        <div class="border border-gray-200 mx-4" style="border-radius: 12px">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kode Pegawai</th>
                        <th>Nama Lengkap</th>
                        <th>Divisi</th>
                        <th>Departemen</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($mykaryawan as $k)
                    <tr>
                        <td>{{ $k->kodepegawai }}</td>
                        <td>{{ ucwords(strtolower($k->namalengkap)) }}</td>
                        <td>{{ $k->divisi }}</td>
                        <td>{{ $k->departemen }}</td>
                        <td>
                            <a href="eas/edit/{{ $k->kodepegawai }}" class="btn "
                                style="background-color: #f3c6c6; border-radius: 6px;">Edit</a>
                            <a href="eas/view/{{ $k->kodepegawai }}" class="btn "
                                style="background-color: #dfd1f4; border-radius: 6px;">View</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
