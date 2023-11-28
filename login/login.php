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
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa keberadaan akun
$sql = "SELECT * FROM account WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    // Verifikasi password
    if (password_verify($password, $hashed_password)) {
        // Login berhasil
        $role = $row['role'];

        // Redirect sesuai role
        if ($role === 'storyteller') {
            header("Location: storyteller-index.php"); 
        } else if ($role === 'reader') {
            $_SESSION['username'] = $username; // Simpan username dalam sesi
            header("Location: index.php");
        }
    } else {
        echo "Login failed. Invalid username or password.";
    }
} else {
    echo "Login failed. Invalid username or password.";
}

$conn->close();
?>
