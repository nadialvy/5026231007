@extends('template')
@section('content')
    <div class="mb-4">
        <h3 class="px-4" style="font-weight: 800;">Manajemen Kursi</h3>
        <div class="row py-2 mx-4 mb-4">
            <div class="col-12 col-md-6 col-lg-3 mb-2">
                <div class="border p-3 hover-shadow" style="border-radius: 10px; background-color: #EBF5FF;">
                    <p style="color: #757575; margin: 0;" class="py-1">Jumlah Kursi</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 style="font-weight: 700; margin: 0;" id="jumlahKursi">0</h3>
                        <div style="background-color: #c2e0ff; border-radius: 4px; padding: 8px;"
                            class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/kursi/total.png') }}" alt="total"
                                style="width: 16px; height: 16px;">
                        </div>
                    </div>
                    <p style="margin: 0; color: #c9c9c9; font-size:14px;" class="pt-3 updatedAt">
                        Diupdate: Hari Ini - 00:00
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-2">
                <div class="border p-3 hover-shadow" style="border-radius: 10px; background-color: #F4EDFF;">
                    <p style="color: #757575; margin: 0;" class="py-1">Total Nilai Inventaris</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 style="font-weight: 700; margin: 0;" id="totalNilaiInventaris">Rp0</h3>
                        <div style="background-color: #e3d2ff; border-radius: 4px; padding: 8px;"
                            class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/kursi/total-assets.png') }}" alt="total"
                                style="width: 16px; height: 16px;">
                        </div>
                    </div>
                    <p style="margin: 0; color: #c9c9c9; font-size:14px;" class="pt-3 updatedAt">
                        Diupdate: Hari Ini - 00:00
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-2">
                <div class="border p-3 hover-shadow" style="border-radius: 10px; background-color: #EAFDF9;">
                    <p style="color: #757575; margin: 0;" class="py-1">Rata-Rata Berat</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 style="font-weight: 700; margin: 0;" id="rataBerat">0<span style="font-size: 16px;">kg</span>
                        </h3>
                        <div style="background-color: #b7e9de; border-radius: 4px; padding: 8px;"
                            class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/kursi/weight-avg.png') }}" alt="berat avg"
                                style="width: 16px; height: 16px;">
                        </div>
                    </div>
                    <p style="margin: 0; color: #c9c9c9; font-size:14px;" class="pt-3 updatedAt">
                        Diupdate: Hari Ini - 00:00
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-2">
                <div class="border p-3 hover-shadow" style="border-radius: 10px; background-color: #FFF7EA;">
                    <p style="color: #757575; margin: 0;" class="py-1">Ketersediaan Kursi</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 style="font-weight: 700; margin: 0;" id="ketersediaan">0%</h3>
                        <div style="background-color: #ffedd0; border-radius: 4px; padding: 8px;"
                            class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/kursi/availability.png') }}" alt="total"
                                style="width: 16px; height: 16px;">
                        </div>
                    </div>
                    <p style="margin: 0; color: #c9c9c9; font-size:14px;" class="pt-3 updatedAt">
                        Diupdate: Hari Ini - 00:00
                    </p>

                </div>
            </div>
        </div>


        <div class="border border-gray-200 mx-4" style="border-radius: 12px"> <!-- full Tailwind -->
            <div class="d-flex px-2 border-bottom border-2 justify-content-end align-items-center py-3">
                <form action="/pr-pertemuan-14/kursi/search" method="GET" class="form-inline mr-4" id="searchForm">
                    <div class="position-relative" style="width: 400px;">
                        <img src="{{ asset('assets/kursi/search.png') }}" alt=""
                            style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); width: 16px; height: 16px;">
                        <input type="text" name="search" placeholder="Masukkan merk kursi..."
                            value="{{ old('search') }}" class="form-control" id="searchInput"
                            style="border-radius: 100px; padding-left: 2.5rem; color: #333; width: 100%;">
                    </div>
                </form>
                <a href="/pr-pertemuan-14/kursi/tambah" class="btn px-4"
                    style="color: white; background-color: #3c6b9e; border-radius: 200px; padding-top: 6px; padding-bottom: 6px;">Tambah
                    Kursi Baru + </a>
            </div>
            <br />
            <table class="table mb-1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merk Kursi</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Berat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($kursi as $k)
                    <tr>
                        <td>{{ $k->ID }}</td>
                        <td>{{ $k->merkkursi }}</td>
                        <td>Rp{{ $k->hargakursi }}</td>
                        <td>
                            <p style="background-color: {{ $k->tersedia == 1 ? '#9DE1D3' : '#D1D1D1' }};"
                                class=" text-sm px-3 py-1 rounded-pill d-inline-block">
                                {{ $k->tersedia == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                            </p>

                        </td>
                        <td>{{ $k->berat }}kg</td>
                        <td>
                            <a href="kursi/edit/{{ $k->ID }}" class="btn "
                                style="background-color: #dfd1f4; border-radius: 6px;">Edit</a>
                            <a href="kursi/delete/{{ $k->ID }}" class="btn "
                                style="background-color: #f3c6c6; border-radius: 6px;">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="p-4">
                {{ $kursi->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

    <script>
        let debounceTimer;
        const input = document.getElementById('searchInput');
        const form = document.getElementById('searchForm');

        input.addEventListener('input', function() {
            clearTimeout(debounceTimer);

            debounceTimer = setTimeout(() => {
                form.submit();
            }, 3000);
        });

        document.addEventListener('DOMContentLoaded', function() {
            fetch('/pr-pertemuan-14/kursi/analytics')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('jumlahKursi').textContent = data.total_kursi;
                    document.getElementById('totalNilaiInventaris').textContent = 'Rp' + numberWithSeparator(
                        data.total_assets);
                    document.getElementById('rataBerat').innerHTML = data.weight_average +
                        '<span style="font-size: 16px;">kg</span>';
                    document.getElementById('ketersediaan').textContent = data.availability_percentage + '%';
                })
                .catch(error => {
                    console.error('Gagal mengambil data analytics:', error);
                });
        });

        function numberWithSeparator(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function getCurrentTime() {
            const now = new Date();
            const jam = now.getHours().toString().padStart(2, '0');
            const menit = now.getMinutes().toString().padStart(2, '0');
            return `${jam}:${menit}`;
        }

        document.addEventListener('DOMContentLoaded', function() {
            const updatedAtEls = document.getElementsByClassName('updatedAt');
            for (let i = 0; i < updatedAtEls.length; i++) {
                updatedAtEls[i].textContent = `Diupdate: Hari Ini - ${getCurrentTime()}`;
            }
        });
    </script>
@endsection
