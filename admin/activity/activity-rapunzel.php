<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVITY</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Irish+Grover');
        *, html, body {
            margin: 0;
            padding: 0;
            font-family: 'Irish Grover';
        }

        .container {
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100vw;
            height: 100vh;
        }

        .wrapper {
            display: flex;
            justify-content: space-between;
            width: 100vw;
            height: 60px;
            font-size: 20px;
            background-image: url('wallpaper.png');
            background-size: cover;
            box-shadow: 0 10px 50px 0 black;
            background-position: center top;
            position: fixed;
            top: 0;
        }

        .left .left-text img {
            width: 85px;
            height: 65px;
        }

        .navigation {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 10px;
            font-size: 20px;
        }

        .navigation > li {
            list-style-type: none;
            padding: 15px;
            margin: 0 30px;
            display: flex;
            align-items: center;
        }

        .navigation > li > a {
            color: #EDD573;
            text-decoration: none;
        }

        .navigation a:active {
            color: rgb(187, 138, 187);
            border-bottom: 2px solid rgb(187, 138, 187);
            padding-bottom: 3px;
        }

        .navigation a:hover {
            color: rgb(187, 138, 187);
        }

        .acc {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-right: 20px;
        }

        .rapunzel {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('wallpaper-rapunzel.png');
            background-position: bottom left;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .eugene {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-image: url('wallpaper-eugene.png');
            background-position: bottom right;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .content {
            position: absolute;
            top: 10px;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .big-box{
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-top: 10px;
            margin-bottom: 0px;
            
        }

        .box-1{
            display: flex;
            justify-content: center;
            width: 400px;
            height: 200px;
            background-image: url('act-1.png');
            background-repeat: no-repeat;
            background-size: contain;
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 0px;
   
        }

        .mini-box{
            display: flex;
            justify-content: center;
            flex-direction: row;
            width: 350px;
            height: 120px;
            box-shadow: 2px 3px 2px rgba(0, 0, 0, 0.5);
            background-color: #C489CD;
            border-radius: 80px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .img img{
            width: 150px;
            margin-left: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .content h1 {
            color: #EDD573;
            font-size: 40px;
            font-weight: 400;
            text-shadow:2px 3px 2px #C489CD; ;
        }

        .act p{
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
            color: #EDD573;
            font-size: 13px;
        }

        .edit {
            background-color: rgb(233, 226, 131);
            width: 80px;
            border-radius: 20px;
            box-shadow: 0px 4px 2px rgb(0, 0, 0);
            border: none;
            padding: 5px;
            margin-top: 20px;
            margin-right: 10px;
            margin-left: 10px;
        }

        .edit a{
            color: #C489CD;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <div class="container">
        <nav class="wrapper">
            <div class="left">
                <div class="left-text"><img src='navbar1.png'></div>
            </div>
            <ul class="navigation">
                <li><a href="../index/index.php">HOME</a></li>
                <li><a href="../character/character.php">CHARACTER</a></li>
                <li><a href="activity.php">ACTIVITY</a></li>
            </ul>
            <a href="../profile/my-profile.php"><img class='acc' src="acc.jpg"></a>
        </nav>
            <div class="main">
                <div class="rapunzel"></div>
                <div class="eugene"></div>
                <div class="content">
                   <h1>Activity Rapunzel</h1>
                   <div class="big-box">
                        <div class="box-1">
                            <div class="mini-box">
                                <div class="img">
                                    <img src="activity (1).png">
                                </div>
                                <div class="act">
                                    <p>Rapunzel kecil merayakan hari ulang tahunnya dengan perayaan lampion</p>
                                    <button class="edit"><a href="edit-act.php">Edit</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="box-1">
                                <div class="mini-box">
                                    <div class="img">
                                        <img src="activity (2).png">
                                    </div>
                                    <div class="act">
                                        <p>Rapunzel kecil diculik oleh<br>penyihir jahat bernama mother gothel</p>
                                        <button class="edit"><a href="edit-act.php">Edit</a></button>
                                    </div>
                                </div>
                        </div>
                   </div>
                   <div class="big-box">
                    <div class="box-1">
                        <div class="mini-box">
                            <div class="img">
                                <img src="activity (3).png">
                            </div>
                            <div class="act">
                                <p>Rapunzel kecil diculik oleh<br> penyihir jahat bernama mother gothel</p>
                                <button class="edit"><a href="edit-act.php">Edit</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="box-1">
                            <div class="mini-box">
                                <div class="img">
                                    <img src="activity (4).png">
                                </div>
                                <div class="act">
                                    <p>Rapunzel penasaran dengan dunia luar</p>
                                    <button class="edit"><a href="edit-act.php">Edit</a></button>
                                </div>
                            </div>
                    </div>
               </div>
                   
                   
                    
                
                </div>
            </div>
    </div>
</body>

</html>

