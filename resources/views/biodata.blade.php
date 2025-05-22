<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>Biodata</p>
  <p>Nama: {{ $nama }}</p>
  <p>Usia: {{ $usia }}</p>
  <p>Alamat: {{ $alamat }}</p>
  <ul>
    @foreach ($matkul as $matku)
    <li>{{ $matku }}</li>

    @endforeach
  </ul>
</body>

</html>