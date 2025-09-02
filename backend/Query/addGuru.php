<?php
    include __DIR__ . '/../database.php';
    
    if (isset($_POST['simpan'])) {
        $namaGuru = $_POST['namaGuru'];
        $tanggal_lahir = $_POST['ttl'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $mapel = $_POST['mapel'];

        $sqlAddGuru = "INSERT INTO guru (nama, tanggal_lahir, jenis_kelamin, mapel) VALUES ('$namaGuru', '$tanggal_lahir', '$jenis_kelamin', '$mapel')";
        
        $hasilAddGuru = $conn->query($sqlAddGuru);

        if ($hasilAddGuru) {
            header("Location: ../../konten/Guru/DataGuru/index.php");
        } else {
            echo 'data gagal disimpan!';
        }
    }


?>