<html>

<head>
  <title>Tombol Interaktif</title>
  <style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #fefefe;
    padding: 40px;
  }

  .btn {
    background-color: #a58ee8;
    color: white;
    font-size: 16px;
    padding: 10px 18px;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(165, 142, 232, 0.4);
    transition: all 0.3s ease;
    margin-right: 10px;
    cursor: pointer;
  }

  .btn:hover {
    background-color: #c4abf5;
    transform: scale(1.05);
  }

  .btn--disabled {
    opacity: 0.5;
    cursor: not-allowed;
    box-shadow: none;
  }

  .custom-link {
    display: inline-block;
    background-color: #e0e0e0;
    color: #5b4b8a;
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 6px;
    font-weight: bold;
    margin-top: 20px;
    transition: all 0.3s ease;
  }

  .custom-link:hover {
    background-color: #d1c8f3;
    color: #3a2d71;
    text-decoration: underline;
    transform: translateY(-2px);
    box-shadow: 0 4px 6px rgba(130, 130, 255, 0.3);
  }
  </style>
</head>

<body>
  <button class="btn">Setuju</button>
  <button class="btn">Tidak Setuju</button>
  <button class="btn btn--disabled" disabled>Tidak Berfungsi</button>
  <br><br>
  <a class="custom-link" href="https://www.youtube.com/watch?v=ta6FVpCKzpI" target="_blank">Lihat Tutorial di
    YouTube</a>
</body>

</html>