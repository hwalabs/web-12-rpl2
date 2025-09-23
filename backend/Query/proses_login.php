<?php
    include __DIR__ . '/../database.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM pengguna WHERE email='$email' && password='$password' LIMIT 1";
    $hasil = $conn->query($sql);

    if ($hasil->num_rows > 0) {
        header("Location: ../../halamanUtama.php");
    } else {
        echo "Email atau Password salah";
    }

?>