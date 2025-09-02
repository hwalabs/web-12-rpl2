<?php
    include __DIR__ . '/../database.php';

    if (isset($_POST['update'])) {
        $id_guru = $_POST['id_guru'];
        $namaGuru = $_POST['namaGuru'];
        $tanggal_lahir = $_POST['ttl'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $mapel = $_POST['mapel'];

        $sqlEditDataGuru = "UPDATE guru SET nama = '$namaGuru', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', mapel = '$mapel' WHERE id_guru = '$id_guru'";
        $hasil=$conn->query($sqlEditDataGuru);

        if ($hasil) {
            header("Location: ../../konten/Guru/DataGuru/index.php");
        }
    }
?>