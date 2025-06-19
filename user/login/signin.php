<?php
session_start();
require_once('../../koneksi.php');

// Memeriksa apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi form
    if (empty($username) || empty($password)) {
        echo "Semua kolom harus diisi.";
    } else {
        // Query SQL untuk memeriksa keberadaan user dalam database
        $sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        // Memeriksa hasil query
        if ($result) {
            // Memeriksa jumlah baris hasil query
            $row_count = mysqli_num_rows($result);
            if ($row_count == 1) {
                // Mengambil data user
                $user_data = mysqli_fetch_assoc($result);

                // Menyimpan data user dalam session
                $_SESSION['user_id'] = $user_data['acc_id'];
                $_SESSION['username'] = $user_data['username'];
                $_SESSION['role'] = $user_data['role'];

                // Redirect sesuai role setelah login
                if ($_SESSION['role'] == 'storyteller') {
                    header('Location: ../pop-up/signin-success.php');
                } else {
                    header('Location: ../../user/index/index.php');
                }
                exit();
            } else {
                header('Location: ../pop-up/signin-failed.php');
            }
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
    <title>SIGN IN</title>
    <script>
        function validateForm() {
            var username = document.forms["sign"]["username"].value;
            var password = document.forms["sign"]["password"].value;
            if (username == "" || password == "") {
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
                    <h2>SIGN IN</h2><style>h2{margin-bottom:25px;}</style>
                    <form action="POST" name="sign"  onsubmit="return validateForm()">
                        <div class="input-box">
                            <input type="text" name="username">
                            <label>Username</label>
                        </div>
                        <div class="input-box">
                            <input type="password" name="password" >
                            <label>Password</label>
                        </div>
                        <div class="signup-link">
                            <p>Don't have an account yet? <a href="signup.php">SIGN UP</a></p>
                        </div>
                        <button class="btn">SIGN IN</button>
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

.body{
    display: flex;
    justify-content: center;
    align-items: center;
    max-height: 100vh; 
    background: white;
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    position: fixed;
}

.right{
    background: white;
    background-size: 50% 100%;
    width: 50%;
    height: 100%;
    overflow: hidden;
}

.prop-left img{
    position: absolute;
    top: 0px; 
    right: 0px;
    width: 178px;
}

.container .form-box{
    position: absolute;
    top: 0;
    width: 40%;
    height: 100%; 
    display: flex;
    flex-direction: column;
    justify-content: center;
 }

 .container .form-box.login{
    right : 55px;
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
    color: rgb(187, 138, 187);
    padding-right: 60px;
    font-size: 20px;
    font-weight: 500;
    border-bottom: 2px solid black;;
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
    color: rgb(225, 150, 177);
 }

 

 