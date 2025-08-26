<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
    <title>Document</title>
  </head>
  <body class="bg-light">
    <div class="container">
      <h3>Form Data Siswa</h3>
      <div class="row justify-content-center">
        <div class="col-sm-7">
          <div class="card shadow-sm">
            <div class="card-body">
              <form>
                <div class="mb-3 row align-items-center">
                  <label for="namaSiswa" class="col-sm-3 col-form-label"
                    ><i class="bi bi-person-check-fill"></i> Nama Siswa</label
                  >
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="namaSiswa" />
                  </div>
                </div>
                <div class="mb-3 row align-items-center">
                  <label for="jurusan" class="col-sm-3 col-form-label"
                    ><i class="bi bi-circle-square"></i> Jurusan</label
                  >
                  <div class="col-sm-7">
                    <select
                      class="form-select"
                      aria-label="Default select example"
                    >
                      <option selected>Pilih Jurusan</option>
                      <option value="rpl">Rekayasa Perangkat Lunak</option>
                      <option value="tbsm">Teknik Bisnis Sepeda Motor</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row align-items-center">
                  <label for="jurusan" class="col-sm-3 col-form-label"
                    ><i class="bi bi-boxes"></i> Kelas</label
                  >
                  <div class="col-sm-7">
                    <select
                      class="form-select"
                      aria-label="Default select example"
                    >
                      <option selected>Pilih Kelas</option>
                      <option value="12rpl1">XII RPL 1</option>
                      <option value="12rpl2">XII RPL 2</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row align-items-center">
                  <label for="alamat" class="col-sm-3 col-form-label">
                    <i class="bi bi-houses"></i> Alamat
                  </label>
                  <div class="col-sm-7">
                    <textarea
                      class="form-control"
                      id="alamat"
                      name="alamat"
                      rows="3"
                      placeholder="Masukkan alamat"
                    ></textarea>
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
