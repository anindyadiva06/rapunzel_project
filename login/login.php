<?php
session_start();
require_once('koneksi.php');

// Koneksi ke Database
$conn = new mysqli("localhost", "root", "", "tangledd");

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa akun
$sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Akun ditemukan
    $row = $result->fetch_assoc();
    $role = $row['role'];

    // Redirect sesuai peran
    if ($role === 'storyteller') {
        header("Location: admin_dashboard.php"); // Ganti dengan URL halaman admin
    } else if ($role === 'reader') {
        echo "Login successful. Welcome, $username!";
        // Redirect ke halaman pengguna biasa 
    }
} else {
    echo "Login failed. Invalid username or password.";
}

$conn->close();
?>

