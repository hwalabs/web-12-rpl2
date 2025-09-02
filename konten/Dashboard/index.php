<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>
    <?php
        include __DIR__ . '/../../backend/Query/readGuru.php';
    ?>
    <div class="container-fluid">
        <h3 class="p-3">Selamat Datang!</h3>
        <div class="row">
            <div class="col-sm-3 ca">
                <div class="card m-3 shadow-sm">
                    <div class="card-body">
                        <h4 class="fs-2 text-muted">Guru</h4>
                        <p class="fs-1"><i class="bi bi-people-fill"></i> <?= $jumlahGuru ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 ca">
                <div class="card m-3 shadow-sm">
                    <div class="card-body">
                        <h4 class="fs-2 text-muted">Siswa</h4>
                        <p class="fs-1"><i class="bi bi-people-fill"></i>600</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>