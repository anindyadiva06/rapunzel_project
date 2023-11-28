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

// Atur pengaturan karakter untuk koneksi
mysqli_set_charset($koneksi, "utf8");

?>