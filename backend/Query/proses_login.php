<?php
    session_start();
    include __DIR__ . '/../database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM pengguna WHERE email='$email' && password='$password' LIMIT 1";
    $hasil = $conn->query($sql);

    if ($hasil->num_rows > 0) {
        $row = $hasil->fetch_assoc();

        //simpan data pengguna
        $_SESSION['id_pengguna'] = $row['id_pengguna'];
        $_SESSION['nama_pengguna'] = $row['nama'];
        $_SESSION['email_pengguna'] = $row['email'];

        header("Location: ../../halamanUtama.php");
    } else {
        echo "<script>alert('email atau password salah');window.location.href='../../index.php';</script>";
    }

?>