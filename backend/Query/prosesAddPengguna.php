<?php
include __DIR__ . '/../database.php';

$namaPengguna = $_POST['nama'];
$emailPengguna = $_POST['email'];
$passwordPengguna = $_POST['password'];
$passwordHash = password_hash($passwordPengguna, PASSWORD_DEFAULT);

$sql = "INSERT INTO pengguna (nama, email, password) VALUES ('$namaPengguna', '$emailPengguna', '$passwordHash')";
$hasil = $conn->query($sql);


if ($hasil) {
    echo "<script>alert('Data berhasil disimpan!');window.location.href='../../konten/tambahPengguna.php';</script>";
} else{
    echo "<script>alert('Data gagal disimpan!')</script>";
}