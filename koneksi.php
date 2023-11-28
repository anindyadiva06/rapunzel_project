<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "tangledd";

// Membuat koneksi ke database
$conn = mysqli_connect($server, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($koneksi, "utf8");

?>