<?php
include __DIR__ . '/../database.php';

$sqlRead = "SELECT * FROM guru";
$hasil = $conn->query($sqlRead);
