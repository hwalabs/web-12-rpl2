<?php
session_start();
if (!isset($_SESSION['id_pengguna'])) {
    header("Location: ../index.php");
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
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
  <title>Tambah Pengguna</title>
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="card shadow-sm">
          <div class="card-body">
            <h3 class="text-center">TAMBAH PENGGUNA</h3>
            <hr>
            <form action="../backend/Query/prosesAddPengguna.php" method="POST">
              <div class="mb-3 row">
                <label for="nama" class="col-4 col-form-label">
                  <i class="bi bi-person-circle"></i> Nama
                </label>
                <div class="col-8">
                  <input type="text" class="form-control" id="nama" name="nama" required />
                </div>
              </div>

              <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">
                  <i class="bi bi-envelope-at"></i> Email
                </label>
                <div class="col-8">
                  <input type="email" class="form-control" id="email" name="email" required />
                </div>
              </div>

              <div class="mb-3 row">
                <label for="password" class="col-4 col-form-label">
                  <i class="bi bi-key-fill"></i> Password
                </label>
                <div class="col-8">
                  <input type="password" class="form-control" id="password" name="password" required />
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
