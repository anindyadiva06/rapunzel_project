<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "tangledd";

// Membuat koneksi ke database
$conn = mysqli_connect($server, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

?>