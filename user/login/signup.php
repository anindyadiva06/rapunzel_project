<?php
session_start();
require_once('../../koneksi.php');

// Memeriksa apakah form sign up telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi form
    if (empty($name) || empty($username) || empty($password) || empty($confirm_password)) {
        echo "Semua kolom harus diisi.";
    } elseif ($password != $confirm_password) {
        echo "Konfirmasi password tidak sesuai.";
    } else {
        // Query SQL untuk menambahkan user baru ke database
        $sql = "INSERT INTO account (username, password, role) VALUES ('$username', '$password', 'user')";

        if (mysqli_query($conn, $sql)) {
            echo "Pendaftaran berhasil. Silakan <a href='signin.php'>login</a>.";
            // Redirect ke halaman signin.php setelah berhasil membuat akun
            header('Location: signin.php');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

// Menutup koneksi ke database
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>SIGN UP</title>
    <script>
        function validateForm() {
            var name = document.forms["sign"]["name"].value;
            var username = document.forms["sign"]["username"].value;
            var password = document.forms["sign"]["password"].value;
            var pw = document.forms["sign"]["pw"].value;
            if (name == "" || username == "" || password == "" || pw == "") {
                alert("Field can't be empty! ");
                return false; 
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="login.png" />
        </div>
        <div class="right">
            <div class="right-text">
                <div class="prop-left"><img src="sign-prop.png"></div>
                <div class="form-box login">
                    <h2>SIGN UP</h2><style>h2{margin-bottom:25px;}</style>
                    <form action="POST" name="sign" onsubmit="return validateForm()">
                        <div class="input-box">
                            <input type="text" name="name">
                            <label>Name</label>
                        </div>
                        <div class="input-box">
                            <input type="text" name="username">
                            <label>Username</label>
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" >
                            <label>Password</label>
                        </div>
                        <div class="input-box">
                            <input type="password" name="pw">
                            <label>Confirm Password</label>
                        </div>
                        <div class="signup-link">
                            <p>Already have an account? <a href="signin.php">SIGN IN</a></p>
                        </div>
                        <button class="btn">SIGN UP</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css?family=Irish Grover');
*{
    margin: 0;
    padding : 0;
    box-sizing: border-box;
    font-family: 'Irish Grover';
}

body{
    display: flex;
    justify-content: center;
    align-items: center;
    max-height: 100vh; 
    background: white;
    position: relative;
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

.right{
    background: white;
    background-size: 100% 100%;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.left img{
    position: bottom left;
}

.prop-left img{
    position: absolute;
    top: 0px; 
    right: 0px;
    width: 200px;
}

.container .form-box{
    position: absolute;
    top: 0;
    width: 35%;
    height: 100%; 
    display: flex;
    flex-direction: column;
    justify-content: center;
 }

 .container .form-box.login{
    right : 100px;
    padding: 0 40px 0 60px;
}

.prop{
    position: absolute;
    top: 10px; 
    right: 25px;
    width: 0px;
}

.form-box h2{
    font-size : 32px;
    text-align: center;
}

.form-box .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 25px 0;
 }

.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    color: rgb(207, 154, 207);
    padding-right: 23px;
    font-size: 20px;
    font-weight: 500;
    border-bottom: 2px solid black;
    transition: .5s;
 }

.input-box input:focus,.input-box input:valid{
    border-bottom-color: rgb(136, 136, 136);
 }

 .input-box label{
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 20px; 
    color : black;
    pointer-events: none;
    transition: .5s;
 }

 .input-box input:focus~label,.input-box input:valid~label{
    top : -5px;
    color: rgb(136, 136, 136);
 }

 .btn{
    position: relative;
    width: 100%;
    height: 45px;
    font-size: 25px;
    background: rgb(207, 154, 207);
    border: none;
    border-radius: 40px;
    cursor: pointer;
 }

 .form-box .signup-link{
    color: black;
    font-size: 14px;
    text-align: center;
    margin : 20px 0 10px;
 }

 .signup-link{
    text-align: right;
 }
 .signup-link p a{
    text-decoration: none;
    font-weight: 500;
    color: rgb(187, 138, 187);
 }

 

 