<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pendaftaran ISE</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>

<body>
  <div class="container mt-3">
    <form action="https://www.google.co.id" method="get" onsubmit="return validasi()">
      <h2>Pendaftaran ISE</h2>
      <div class="form-group">
        <label for="nrp">NRP:</label>
        <input type="text" class="form-control" id="nrp" name="nrp" required />
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required />
      </div>
      <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
  </div>
  <script>
  function validasi() {
    var nrp = document.getElementById("nrp").value;
    var name = document.getElementById("name").value;

    // validasi
    if (isNaN(nrp)) {
      Swal.fire({
        icon: "error",
        title: "Terjadi Kesalahan",
        text: "NRP harus berupa angka!",
      });
      return false;
    }

    if (nrp.length != 10) {
      Swal.fire({
        icon: "error",
        title: "Terjadi Kesalahan",
        text: "NRP harus 10 digit!",
      });
      return false;
    }

    if (nrp.substring(0, 2) != "50") {
      Swal.fire({
        icon: "error",
        title: "Terjadi Kesalahan",
        text: "NRP harus dimulai dari 50!",
      });
      return false;
    }
  }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>