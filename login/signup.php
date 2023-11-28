<?php
session_start();
require_once('koneksi.php');

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "tangledd");

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validasi password
if ($password !== $confirm_password) {
    die("Error: Passwords do not match.");
}

// Query untuk menyimpan data ke database
$sql = "INSERT INTO account (username, password, role) VALUES ('$username', '$password', 'reader')";

if ($conn->query($sql) === TRUE) {
    echo "Sign Up successful. <a href='signin.html'>SIGN IN here</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
