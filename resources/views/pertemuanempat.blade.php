<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="./styles.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link
    href="https://fonts.googleapis.com/css2?family=Lexend+Mega:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <style>
  body {
    font-family: "Poppins", sans-serif;
  }

  #sidebar {
    transition: width 0.3s ease, padding 0.3s ease;
  }

  #toggleSidebar:hover {
    cursor: pointer;
  }

  #mainContent {
    transition: width 0.3s ease;
  }

  /* Ketika elemen dengan ID #sidebarToggle dalam keadaan tercentang (checked), selektor ini akan menargetkan elemen #sidebar yang berada di dalam elemen main.
       */

  #sidebarToggle:checked~main #sidebar {
    width: 0 !important;
    padding: 0 !important;
    overflow: hidden;
    border: none;
  }

  /* Ketika elemen #sidebarToggle tercentang, selektor ini akan menargetkan elemen #mainContent yang berada di dalam main. */
  #sidebarToggle:checked~main #mainContent {
    width: 100% !important;
  }

  .toggle-label {
    transition: margin-left 0.3s ease;
  }

  #sidebarToggle:checked~.toggle-label {
    margin-left: 2% !important;
  }
  </style>
  <title>Hello, world!</title>
</head>

<body>
  <input type="checkbox" id="sidebarToggle" hidden />
  <label for="sidebarToggle" class="toggle-label position-absolute mt-4"
    style="z-index: 1000; cursor: pointer; margin-left: 22%">
    <img src="./assets/bar.svg" alt="menu" width="20" height="20" />
  </label>
  <main style="height: 100vh" class="d-flex justify-content-start align-items-start">
    <div id="sidebar" class="d-flex flex-column h-100 flex-shrink-0 text-white border"
      style="width: 280px; background-color: #4b759e; padding: 16px">
      <div class="h-75 d-flex flex-column justify-content-between">
        <div class="">
          <div class="d-flex align-items-center justify-content-start gap-4">
            <img src="/assets/profile.avif" alt="profile pict" class="rounded-circle mr-2" width="50" height="50" />
            <div>
              <p class="mb-0">Admin</p>
              <p class="mb-0">admin@gmail.com</p>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-start mt-4 mb-3">
            <img src="./assets/file.svg" alt="file.svg" width="20" height="20" class="mr-2" />
            <p class="mb-0">Helperlog</p>
          </div>
          <div class="d-flex align-items-center justify-content-start mt-4 mb-3">
            <img src="./assets/search.svg" alt="file.svg" width="20" height="20" class="mr-2" />
            <p class="mb-0">Helperfind</p>
          </div>
        </div>
        <button type="button"
          class="btn border border-secondary btn-primary d-flex align-items-center justify-content-start button-logout"
          style="background-color: #a1bcd8">
          <img src="./assets/logout.svg" alt="logout" width="20" height="20" class="mr-2" />
          <p class="mb-0">Log Out</p>
        </button>
      </div>
    </div>

    <div id="mainContent" class="h-100 w-75 d-flex flex-column justify-content-start align-items-start mx-auto" style="
          padding-left: 50px;
          padding-right: 50px;
          padding-top: 30px;
          padding-bottom: 30px;
        ">
      <div class="w-100 d-flex justify-content-start align-items-center">
        <img src="./assets/arrow-left.svg" alt="arrow-left" class="mr-2" width="20" height="20" />
        <h4 class="mb-0 font-weight-bold">Detail PRT</h4>
      </div>
      <div class="d-flex justify-content-start align-items-start w-100" style="height: 100vh">
        <div class="w-50 p-3">
          <img src="./assets/gimyung.webp" alt="gimyung cuamiku" class="img-fluid rounded border"
            style="width: 100%; height: 440px; object-fit: cover" />
        </div>
        <div class="w-50 p-3 d-flex flex-column justify-content-around h-100">
          <div>
            <h4 class="mb-0 font-weight-bold">Kim Gimyung</h4>
            <p class="mb-0">Mafia</p>
          </div>

          <!-- card -->
          <div class="border rounded d-flex justify-content-center align-items-center p-2 mt-3">
            <div class="d-flex w-50 justify-content-center align-items-center flex-column">
              <h5 class="mb-0 font-weight-bold">4</h5>
              <p class="mb-0">Tahun Pengalaman</p>
            </div>
            <div class="border mx-2" style="height: 60px; background-color: #a1bcd8"></div>
            <div class="d-flex w-50 justify-content-center align-items-center flex-column">
              <div class="d-flex justify-content-center align-items-center">
                <img src="./assets/star.svg" alt="star" width="20" height="20" class="mr-2" />
                <h5 class="font-weight-bold mb-0">4.6</h5>
              </div>
              <p class="mb-0">Rating</p>
            </div>
          </div>

          <!-- horizontal line -->
          <div class="border" style="height: 2px; background-color: #a1bcd8"></div>

          <!-- biodata card -->
          <div class="border rounded">
            <div class="rounded p-2" style="background-color: #b5bdc6">
              <p class="font-weight-bold ml-4 mb-0">Biodata</p>
            </div>
            <div class="d-flex justify-content-start align-items-start p-2">
              <div class="w-25">
                <p class="mb-0">Keahlian 1</p>
                <p class="mb-0">Keahlian 2</p>
                <p class="mb-0">Keahlian 3</p>
                <p class="mb-0">Keahlian 4</p>
              </div>
              <div class="w-75">
                <p class="mb-0">: Memasak</p>
                <p class="mb-0">: Berkelahi</p>
                <p class="mb-0">: Mencuci Baju</p>
                <p class="mb-0">: -</p>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-primary w-100">
            Edit Data
          </button>
        </div>
      </div>
      <div class="d-flex justify-content-start align-items-start w-100">
        <div class="w-50 rounded d-flex justify-content-start align-items-start">
          <img src="./assets/gimyung-1.jpg" alt="gimyung 1" class="rounded border"
            style="width: 25%; height: 200px; object-fit: cover" />
          <img src="./assets/gimyung-2.jpg" alt="gimyung 1" width="100" class="mx-4 border rounded"
            style="width: 25%; height: 200px; object-fit: cover" />
          <img src="./assets/gimyung-3.jpg" alt="gimyung 1" width="100" class="rounded border"
            style="width: 25%; height: 200px; object-fit: cover" />
        </div>
      </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>