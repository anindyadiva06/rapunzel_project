<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVITY</title>
</head>
<body>
    <div class="container">
        <nav class="wrapper">
            <div class="left">
                <a href="index.php" class="left-text"><img src='navbar1.png'></a>
            </div>
            <ul class="navigation">
                <li><a href="index.php">HOME</a></li>
                <li><a href="../character/character.php">CHARACTER</a></li>
                <li><a href="../activity/activity.php">ACTIVITY</a></li>
            </ul>
            <a href="../profile/my-profile.php"><img class='acc' src="acc.jpg"></a>
        </nav>
            <div class="main">
                <div class="rapunzel"></div>
                <div class="eugene"></div>
                <div class="content">
                   <h1>Activity</h1>
                   <div class="box-1">
                        <div class="img">
                            <img src="prop-act (1).png">
                        </div>
                        <div class="text">
                            <h2>Rapunzel</h2>
                            <p>Rapunzel's journey from a baby when she was kidnapped from her parents to meeting a thief who helped her leave the tower to meet her parents</p>
                            <button class="read-more"><a href="activity-rapunzel.php">Read More</a></button>
                        </div>
                    </div>
                    <div class="box-2">
                        <div class="img">
                            <img src="prop-act (2).png">
                        </div>
                        <div class="text">
                            <h2>Eugene</h2>
                            <p>Eugene's journey from being a thief to meeting Rapunzel who changed his life</p>
                            <button class="read-more"><a href="activity-eugene.php">Read More</a></button>
                        </div>
                    </div>
                
                </div>
            </div>
    </div>
</body>
</html>

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
            top: 50px;
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

        .box-1,
        .box-2 {
            display: flex;
            width: 900px;
            height: 180px;
            background-color: #C489CD;
            border-radius: 40px;
            margin: 30px;
        }

        .box-1 img,
        .box-2 img {
            width: 330px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .content h1 {
            color: #EDD573;
            font-size: 64px;
            font-weight: 400;
        }

        .text {
            color: #EDD573;
            margin-top: 20px;
            margin-bottom: 30px;
            font-size: 17px;
        }

        .text h2 {
            font-weight: 200;
            text-shadow: 2px 3px 2px rgba(0, 0, 0, 0.5);
        }

        .text button {
            background-color: rgb(233, 226, 131);
            width: 120px;
            border-radius: 20px;
            box-shadow: 0px 4px 2px rgb(0, 0, 0);
            border: none;
            padding: 5px;
            margin-top: 10px;
        }

        .read-more a {
            color: #C489CD;
            text-decoration: none;
            font-size: 15px;
        }
    </style>
