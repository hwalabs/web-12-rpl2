<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
  <title>Document</title>
</head>

<body class="bg-light">
    <?php
        include __DIR__ . '/../../../backend/database.php';
        $id = $_GET['id_guru'];
        $sqlEditDataGuru = "SELECT * FROM guru WHERE id_guru = $id";
        $hasil=$conn->query($sqlEditDataGuru);
        $data = mysqli_fetch_assoc($hasil);
    ?>
  <div class="container">
    Form Data Guru
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="card shadow-sm">
          <div class="card-body">
            <form action="../../../backend/Query/editGuru.php" method="POST">
                <input type="hidden" name="id_guru" value="<?= $data['id_guru'] ?>">
              <div class="mb-3 row align-items-center">
                <label for="namaGuru" class="col-sm-5 col-form-label">Nama Guru</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="namaGuru" name="namaGuru" value="<?= $data['nama'] ?>"/>
                </div>
              </div>
              <div class="mb-3 row align-items-center">
                <label for="ttl" class="col-sm-5 col-form-label">Tempat Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input type="date" class="form-control" id="ttl" name="ttl" value="<?= $data['tanggal_lahir'] ?>"/>
                </div>
              </div>
              <div class="mb-3 row align-items-center">
                <label for="jenis_kelamin" class="col-sm-5 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                  <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''?>>Laki-laki</option>
                    <option value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 row align-items-center">
                <label for="mapel" class="col-sm-5 col-form-label">Mata Pelajaran</label>
                <div class="col-sm-7">
                  <select class="form-select" aria-label="Default select example" name="mapel">
                    <option selected>Mata Pelajaran</option>
                    <option value="Pemrograman Web" <?= $data['mapel'] == 'Pemrograman Web' ? 'selected' : '' ?>>Pemrograman Web</option>
                    <option value="Pemrograman Perangkat Bergerak" <?= $data['mapel'] == 'Pemrograman Web' ? 'selected' : '' ?>>Pemrograman Perangkat Bergerak</option>
                    <option value="Pemrograman Perangkat Bergerak" <?= $data['mapel'] == 'Pendidikan Jasmani, Olahraga, dan Kesehatan' ? 'selected' : '' ?>>Pendidikan Jasmani, Olahraga, dan Kesehatan</option>
                  </select>
                </div>
              </div>


              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-3" name="update">
                  UPDATE
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>