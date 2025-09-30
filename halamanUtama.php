<?php
session_start();
if (!isset($_SESSION['id_pengguna'])) {
  header("Location: index.php"); //halaman login
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <title>Kelola Data</title>
  <style>
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #43699c;
      position: fixed;
    }

    .sidebar a {
      display: flex;
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      color: white;
    }

    .sidebar a i {
      color: white;
    }

    .sidebar a:hover {
      background-color: azure;
      color: black;
    }

    .sidebar i {
      padding-right: 10px;
    }

    .content {
      margin-left: 250px;
    }

    iframe {
      width: 100%;
      height: 100vh;
    }
  </style>
</head>

<body class="bg-black">
  <div class="sidebar">
    <h4 class="text-center text-white">Admin</h4>
    <a href="konten/Dashboard/index.php" target="kontenFrame">
      <i class="bi bi-house-heart"></i> Dashboard
    </a>

    <a
      data-bs-toggle="collapse"
      data-bs-target="#menuGuru"
      role="button"
      aria-expanded="false"
      aria-controls="menuGuru">
      <i class="bi bi-person-video3"></i> Guru
    </a>

    <div class="collapse submenu ms-4" id="menuGuru">
      <a href="konten/Guru/DataGuru/index.php" target="kontenFrame">
        <i class="bi bi-person-badge"></i> Data Guru
      </a>
      <a href="konten/Guru/InputDataGuru/" target="kontenFrame">
        <i class="bi bi-person-plus"></i> Input Data Guru
      </a>
    </div>

    <a href="konten/Siswa/DataSiswa/" target="kontenFrame">
      <i class="bi bi-people"></i> Data Siswa
    </a>

    <a href="konten/Siswa/InputDataSiswa/" target="kontenFrame">
      <i class="bi bi-person-lines-fill"></i> Input Data Siswa
    </a>
    <a href="backend/Query/prosesLogout.php">
      <i class="bi bi-box-arrow-left"></i> Logout
    </a>
  </div>

  <!-- <div class="content">
        <h5>Selamat datang,</h5>
        <p>Ini adalah konten pertama saya!</p>
    </div> -->
  <div class="content">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <span class="navbar-text"> Navbar text with an inline element </span>
      </div>
    </nav>
    <iframe
      src="konten/Dashboard/"
      name="kontenFrame"
      frameborder="0"></iframe>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>