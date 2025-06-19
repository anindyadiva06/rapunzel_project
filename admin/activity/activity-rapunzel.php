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
            overflow-y: scroll; 
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
            background-attachment: fixed;
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
            background-attachment: fixed;
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

        .add-act{
            background-color: #EDD573;
            width: 200px;
            border-radius: 50px;
            box-shadow: 0px 4px 10px black;
            padding: 10px;
            text-align: center;
            transform: translateX(-180%);
            margin-bottom: 20px;
        }

        .add-act a{
            color: #C489CD;
            text-decoration: none;
            font-size: 20px;
        }

        .box-1{
            display: flex;
            justify-content: center;
            width: 500px;
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
            width: 450px;
            height: 140px;
            box-shadow: 2px 3px 2px rgba(0, 0, 0, 0.5);
            background-color: #C489CD;
            border-radius: 80px;
            margin-top: 30px;
        }

        .img img{
            width: 150px;
            margin-left: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .content h1 {
            color: #EDD573;
            font-size: 60px;
            font-weight: 390;
            margin-top: 90px;
            text-shadow:2px 3px 2px #C489CD; 
        }

        .act p{
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 50px;
            color: #EDD573;
            font-size: 18px;
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
                <li><a href="../index/index.html">HOME</a></li>
                <li><a href="../character/character.html">CHARACTER</a></li>
                <li><a href="activity.html">ACTIVITY</a></li>
            </ul>
            <a href="../profile/my-profile.html"><img class='acc' src="acc.jpg"></a>
        </nav>
            <div class="main">
                <div class="rapunzel"></div>
                <div class="eugene"></div>
                <div class="content">
                   <h1>Activity Rapunzel</h1>
                   <div class="add-act">
                            <a href="add-act.php">Add Activity</a>
                   </div>
                   <div class="big-box">
                        <div class="box-1">
                            <div class="mini-box">
                                <div class="img">
                                    <img src="activity (1).png">
                                </div>
                                <div class="act">
                                    <p>Little Rapunzel celebrates her birthday with a lantern celebration</p>
                                    <button class="edit"><a href="edit-act.html">Edit</a></button>
                                </div>
                            </div>
                        </div>
                        <div class="box-1">
                                <div class="mini-box">
                                    <div class="img">
                                        <img src="activity (2).png">
                                    </div>
                                    <div class="act">
                                        <p>Rapunzel from childhood to adolescence spent her time in the tower</p>
                                        <button class="edit"><a href="edit-act.html">Edit</a></button>
                                    </div>
                                </div>
                        </div>
                   </div>
                   <div class="big-box">
                    <div class="box-1">
                        <div class="mini-box">
                            <div class="img">
                                <img src="activity (4).png">
                            </div>
                            <div class="act">
                                <p>Little Rapunzel was kidnapped by an evil witch named Mother Gothel</p>
                                <button class="edit"><a href="edit-act.html">Edit</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="box-1">
                            <div class="mini-box">
                                <div class="img">
                                    <img src="activity (3).png">
                                </div>
                                <div class="act">
                                    <p>Rapunzel is curious about the outside world</p>
                                    <button class="edit"><a href="edit-act.html">Edit</a></button>
                                </div>
                            </div>
                    </div>
                    
                    
               </div>
                </div>
            </div>
    </div>
</body>

</html>

