<?php
include __DIR__ . '/../database.php';

$sqlRead = "SELECT * FROM guru";
$hasil = $conn->query($sqlRead);

// menghitung banyaknya guru dari tabel guru
$sqlJumlahGuru = "SELECT COUNT(*) AS jumlah_guru FROM guru";
$hasilJumlahGuru = $conn->query($sqlJumlahGuru);
$baris = $hasilJumlahGuru->fetch_assoc();
$jumlahGuru = $baris['jumlah_guru'];