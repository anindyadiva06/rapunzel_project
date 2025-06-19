<?php
require_once('../../koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = cleanInput($_POST["name"]);
    $bio = cleanInput($_POST["bio"]);

    if (empty($name)) {
        header("Location: edit-profile.php?error=Nama tidak boleh kosong");
        exit();
    }

    $sql = "INSERT INTO profil (nama, bio) VALUES ('$name', '$bio')";

    if ($conn->query($sql) === TRUE) {
         echo "Data profil berhasil disimpan";
    } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();


    header("Location: profile.php");
    exit();
} else {
    echo "Invalid request!";
}
?>
