<?php
    include __DIR__ . '/../database.php';

    $id_guru = $_GET['id_guru'];
    $sqlHapusDataGuru = "DELETE FROM guru WHERE id_guru = $id_guru";
    $hasil = $conn->query($sqlHapusDataGuru);

    if ($hasil) {
        header("Location: ../../konten/Guru/DataGuru/index.php");
    }

?>