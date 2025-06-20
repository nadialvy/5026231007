<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nadia Lovely : 5026231007</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        body {
            /* background: linear-gradient(to right, #ecf3f9, #ffffff); */
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar {
            background-color: #f8f9fa;
        }

        .header {
            background-color: #a7e3ec;
            padding: 2rem 1rem;
            text-align: center;
            font-size: 1.8rem;
            font-weight: bold;
            color: #222;
        }

        .nav-link {
            color: #0d6efd !important;
            margin-right: 1rem;
            font-weight: 500;
        }

        .nav-link:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <div class="header">
        5026231007 : Nadia Lovely
    </div>

    <p></p>

    <nav class="navbar px-4">
        <a class="nav-link" href="/">All Front End</a>
        <a class="nav-link" href="/pegawai">Pegawai</a>
        <a class="nav-link" href="/pr-pertemuan-14/kursi">Tugas CRUD</a>
        <a class="nav-link" href="/eas">EAS</a>
        <a class="nav-link" href="/latihan-1">Latihan 1</a>
        <a class="nav-link" href="/karyawan">Latihan 2</a>
        <a class="nav-link" href="/karyawan-3">Latihan 3</a>
    </nav>

    <div class="px-4 py-5">
        @yield('content')
    </div>

    <footer class="text-center text-muted py-4" style="font-size: 0.85rem;">
        © 2025 Nadia Lovely | Web Programming Final Project
    </footer>

</body>


</html>
