<?php
$server = "localhost";
$username = "ecom4781_FadhilaGalih";
$password = "2300227756Adek.";
$database = "ecom4781_rapunzel";

// Membuat koneksi ke database
$conn = mysqli_connect($server, $username, $password, $database);

mysqli_set_charset($conn, "utf8");
?>
