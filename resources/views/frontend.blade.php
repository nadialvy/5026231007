<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Nadia's Project</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=fredoka:300,400,500,600.700" rel="stylesheet" />

  <!-- Styles / Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#efeaf9] flex p-6 lg:p-8 items-start min-h-screen flex-col">
  <div class="w-full lg:flex">
    <div class="lg:w-1/3 w-full p-2 text-[#795b4b] flex relative">
      <div class="w-full h-full">
        <p class="font-bold text-3xl">Hi There!</p>
        <p class="font-medium text-xl">Welcome to Nadia's Dashboard</p>
        <div class="my-4 p-3 rounded-md w-full bg-[#faf9f5]">
          <div class="flex ">
            <img src="" alt="">
            <p class="font-medium text-[18px]">Profile</p>
          </div>

          <p>Nama: Nadia Lovely 🌸</p>
          <p>Level: Beginner 🌱</p>
        </div>
      </div>
      <img src={{ asset("assets/publish/hero.png") }} alt="mc"
        class="w-[200px] lg:w-[70%] absolute right-0 lg:-right-[20%] bottom-0">
    </div>
    <div class="lg:w-2/3 w-full bg-[#faf9f5] rounded-2xl">
      <div class=" p-8 mx-auto dark:bg-gray-100 dark:text-gray-800">
        <p class="font-bold text-[20px]">Log Update 📨</p>
        <ul class="space-y-4">
          <li class="flex items-start space-x-3">
            <a rel="noopener noreferrer" href="#" class="flex items-center h-8 text-sm hover:underline">v3.2.0</a>
            <div class="flex-1 space-y-2">
              <div class="flex items-center justify-between space-x-4 dark:text-gray-600">
                <a rel="noopener noreferrer" href="#"
                  class="inline-flex items-center px-3 py-1 my-1 space-x-2 text-sm border rounded-full group dark:border-gray-300">
                  <span class="group-hover:underline dark:text-gray-800">Feature</span>
                </a>
                <span class="text-xs whitespace-nowrap">10h ago</span>
              </div>
              <div>
                <p>✨ Fitur baru ditambahkan: kamu sekarang bisa lihat progres tugas secara real-time dan upload langsung
                  dari halaman project!</p>
                <p>🎨 Tampilan tombol juga diperbarui agar lebih lucu dan konsisten dengan tema pastel!</p>

              </div>
            </div>
          </li>
          <li class="flex items-start space-x-3">
            <a rel="noopener noreferrer" href="#" class="flex items-center h-8 text-sm hover:underline">v3.1.9</a>
            <div class="flex-1 space-y-2">
              <div class="flex items-center justify-between space-x-4 dark:text-gray-600">
                <a rel="noopener noreferrer" href="#"
                  class="inline-flex items-center px-3 py-1 my-1 space-x-2 text-sm border rounded-full group dark:border-gray-300">
                  <span class="group-hover:underline dark:text-gray-800">Bugfix</span>
                </a>
                <span class="text-xs whitespace-nowrap">2 weeks ago</span>
              </div>
              <div class="space-y-2">
                <p>🐛 Bug kecil di halaman "Pertemuan 5" sudah diperbaiki — sekarang link materi bisa dibuka dengan
                  lancar!</p>
                <p>📂 Perbaikan pada fitur "Upload GitHub" yang sebelumnya tidak muncul jika browser sedang dalam mode
                  gelap.</p>

              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4  gap-3 mt-6 p-8 bg-[#fffdf4] rounded-2xl">
    <div
      class="w-full bg-[#fee5e2] text-[#684b3c] rounded-md pt-4 py-8 px-4 hover:cursor-pointer hover:shadow-sm hover:-translate-y-2 duration-100 ease-in">
      <p class="font-medium text-[18px] mb-2">Pertemuan 1</p>
      <p class="bg-[#f3c8c4] py-1 px-6 w-fit rounded-md hover:bg-[#d5aba7]">
        <a href="/satu">Akses Website</a>
      </p>
    </div>
    <div
      class="w-full bg-[#e7e7f4] rounded-md pt-4 py-8 px-4 hover:cursor-pointer hover:shadow-sm hover:-translate-y-2 duration-100 ease-in">
      <p class="font-medium text-[18px] mb-2">Pertemuan 2</p>
      <p class="bg-[#bdbde0] py-1 px-6 w-fit rounded-md hover:bg-[#9a9abd]">
        <a href="/dua">Akses Website</a>
      </p>
    </div>
    <div
      class="w-full bg-[#f1dfec] rounded-md pt-4 py-8 px-4 hover:cursor-pointer hover:shadow-sm hover:-translate-y-2 duration-100 ease-in">
      <p class="font-medium text-[18px] mb-2">Pertemuan 3</p>
      <p class="bg-[#d7b3cd] py-1 px-6 w-fit rounded-md hover:bg-[#c198b5] ">
        <a href="/tiga">Akses Website</a>
      </p>
    </div>
    <div
      class="w-full bg-[#feefe3] rounded-md pt-4 py-8 px-4 hover:cursor-pointer hover:shadow-sm hover:-translate-y-2 duration-100 ease-in">
      <p class="font-medium text-[18px] mb-2">Pertemuan 4</p>
      <p class="bg-[#e6ba96] py-1 px-6 w-fit rounded-md hover:bg-[#ae8d71]  ">
        <a href="/empat">Akses Website</a>
      </p>
    </div>
    <div
      class="w-full bg-[#fee5e2] text-[#684b3c] rounded-md pt-4 py-8 px-4 hover:cursor-pointer hover:shadow-sm hover:-translate-y-2 duration-100 ease-in">
      <p class="font-medium text-[18px] mb-2">Linktree</p>
      <p class="bg-[#f3c8c4] py-1 px-6 w-fit rounded-md hover:bg-[#d5aba7]">
        <a href="/linktree">Akses Website</a>
      </p>
    </div>
    <div
      class="w-full bg-[#e7e7f4] rounded-md pt-4 py-8 px-4 hover:cursor-pointer hover:shadow-sm hover:-translate-y-2 duration-100 ease-in">
      <p class="font-medium text-[18px] mb-2">Validasi</p>
      <p class="bg-[#bdbde0] py-1 px-6 w-fit rounded-md hover:bg-[#9a9abd]">
        <a href="/validasi">Akses Website</a>
      </p>
    </div>
    <div
      class="w-full bg-[#f1dfec] rounded-md pt-4 py-8 px-4 hover:cursor-pointer hover:shadow-sm hover:-translate-y-2 duration-100 ease-in">
      <p class="font-medium text-[18px] mb-2">UTS</p>
      <p class="bg-[#d7b3cd] py-1 px-6 w-fit rounded-md hover:bg-[#c198b5] ">
        <a href="/uts">Akses Website</a>
      </p>
    </div>
    <div
      class="w-full bg-[#feefe3] rounded-md pt-4 py-8 px-4 hover:cursor-pointer hover:shadow-sm hover:-translate-y-2 duration-100 ease-in">
      <p class="font-medium text-[18px] mb-2">Coming Soon👀</p>
      <p class="bg-[#e6ba96] py-1 px-6 w-fit rounded-md hover:bg-[#ae8d71]  ">
        <a href="/">-</a>
      </p>
    </div>
  </div>

</html>