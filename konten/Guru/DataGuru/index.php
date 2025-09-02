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

<body>
  <?php
  include '../../../backend/Query/readGuru.php';
  ?>
  <div class="container">
    <div class="row justify-content-center">
      <table class="table w-100">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Mapel</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 0;
          while ($data = mysqli_fetch_assoc($hasil)) {
            $no++;
          ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $data['nama'] ?></td>
              <td><?= $data['tanggal_lahir'] ?></td>
              <td><?= $data['jenis_kelamin'] ?></td>
              <td><?= $data['mapel'] ?></td>
              <!-- edit -->
              <td><a href="formEditDataGuru.php?id_guru=<?= $data['id_guru'] ?>"><i class="bi bi-pencil-square"></i></a></td> 
              <!-- delete -->
              <td><a href="../../../backend/Query/deleteGuru.php?id_guru=<?= $data['id_guru'] ?>"onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="bi bi-trash text-danger"></i></a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>