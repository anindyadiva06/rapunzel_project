<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "tangledd";

// Membuat koneksi ke database
$conn = mysqli_connect($server, $username, $password, $database);

mysqli_set_charset($conn, "utf8");
?>
