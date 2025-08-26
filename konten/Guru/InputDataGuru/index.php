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
  <div class="container">
    Form Data Guru
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="card shadow-sm">
          <div class="card-body">
            <form>
              <div class="mb-3 row align-items-center">
                <label for="namaGuru" class="col-sm-5 col-form-label">Nama Guru</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="namaGuru" />
                </div>
              </div>
              <div class="mb-3 row align-items-center">
                <label for="ttl" class="col-sm-5 col-form-label">Tempat Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input type="date" class="form-control" id="namaGuru" />
                </div>
              </div>
              <div class="mb-3 row align-items-center">
                <label for="ttl" class="col-sm-5 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="lakilaki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
               <div class="mb-3 row align-items-center">
                <label for="mapel" class="col-sm-5 col-form-label">Mata Pelajaran</label>
                <div class="col-sm-7">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Mata Pelajaran</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="perempuan">Pemrograman Perangkat Bergerak</option>
                  </select>
                </div>
               </div>


              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-3">
                  Submit
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