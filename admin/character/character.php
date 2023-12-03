<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHARACTER</title>
</head>
<body>
    <div class="container">
        <nav class="wrapper">
            <div class="left">
                <div class="left-text"><img src='navbar1.png'></div>
            </div>
            <ul class="navigation">
                <li><a href="../index/index.php">HOME</a></li>
                <li><a href="character.php">CHARACTER</a></li>
                <li><a href="../activity/activity.php">ACTIVITY</a></li>
            </ul>
            <a href="../profile/my-profile.php"><img class='acc' src="acc.jpg"></a>
        </nav>
        <div class="main">
            <div class="judul">
                <h2 style="margin-top:180px;">CHARACTER</h2>
            </div>
           
           <div class="box">
                <div class="box-1">
                    <div class="wrap">
                        <div class="img1"></div>
                        <div class="name">Rapunzel</div>
                        <div class="more"><a href="read-rapunzel.php">Get To Know Rapunzel</a></div>
                    </div>
                </div>
                <div class="box-2">
                    <div class="wrap">
                        <div class="img2"></div>
                        <div class="name">Eugene</div>
                        <div class="more"><a href="read-eugene.php">Get To Know Eugene</a></div>
                    </div>
                </div>
                <div class="box-3">
                    <div class="wrap">
                        <div class="img3"></div>
                        <div class="name">Gothel</div>
                        <div class="more"><a href="read-gothel.php">Get To Know Gothel</a></div>
                    </div>
                </div>
                <div class="box-4">
                    <div class="wrap">
                        <div class="img4"></div>
                        <div class="name">Maximus</div>
                        <div class="more"><a href="read-maximus.php">Get To Know Maximus</a></div>
                    </div>
                </div>
           </div>
        </div>
        
        
    </div>
</body>
</html>


<style>
@import url('https://fonts.googleapis.com/css?family=Irish Grover');
*, html, body{
        margin: 0;
        padding: 0;
        font-family: 'Irish Grover';
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    width:100vw;
    height: 100vh;
    background-color: white;
    background-size: contain;
    background-position: bottom left;
    background-repeat: no-repeat;
}

.wrapper{
    display: flex;
    justify-content: space-between;
    width: 100vw;
    height: 60px;
    font-size: 20px;
    background-image: linear-gradient(90deg, rgba(129,128,159,0.8181818181818181) 0%, rgba(70,45,74,0.6217532467532467) 0%), url('navbar2.jpeg');
    background-size: cover;
    box-shadow: 0 10px 50px 0 black;
    position: fixed; 
    top: 0;
}

.left .left-text img{
    width: 85px;
    height: 65px;
}

.navigation{
    display: flex;
    flex-direction: row;
    justify-content: center; 
    align-items: center; 
    padding: 10px;
    font-size: 20px;
}

.navigation > li{
    list-style-type: none;
    padding: 15px;
    margin: 0 30px;
    display: flex;
    align-items: center;

}

.navigation > li > a{
    color: rgb(248, 242, 153);
    text-decoration: none;
}
.navigation a:active{
    color: rgb(187, 138, 187);
    border-bottom: 2px solid rgb(187, 138, 187);
    padding-bottom: 3px;   
}

.navigation a:hover{
    color: rgb(187, 138, 187);
}

.main{
    display: flex;
    flex-direction: column ;
    justify-content: center;
    align-items: center;
}
.acc{
    width : 50px;
    height: 50px;
    border-radius: 50%;
    padding-top: 5px;
    padding-bottom: 5px;
    margin-right: 20px;
}

.judul h2{
    color: rgb(233, 226, 131);
    font-weight: 500;
    font-size: 40px;
}
.box{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    margin-top: 50px;

}

.box-1{
    
    width: 200px;
    height: 500px; 
    background-size: cover; 
    background-repeat: no-repeat;
    background-image: url('char-rapunzel.png');
    margin-left: 10px;
    margin-right: 10px;
}

.box-2{
    width: 200px;
    height: 500px; 
    background-size: cover; 
    background-repeat: no-repeat;
    background-image: url('char-eugene.png');
    margin-left: 10px;
    margin-right: 10px;
}

.box-3{
    width: 200px;
    height: 500px; 
    background-size: cover; 
    background-repeat: no-repeat;
    background-image: url('char-gothel.png');
    margin-left: 10px;
    margin-right: 10px;
}

.box-4{
    width: 200px;
    height: 500px; 
    background-size: cover; 
    background-repeat: no-repeat;
    background-image: url('char-maxim.png');
    margin-left: 10px;
    margin-right: 10px;
}

.wrap{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.img1{
    background-image: url('rapunzel.png');
    background-size: contain; 
    background-repeat: no-repeat;
    background-position: center;
    margin-top: 30px;
    width: 200px;
    height: 200px; 
}

.img2{
    background-image: url('eugene.png');
    background-size: contain; 
    background-repeat: no-repeat;
    background-position: center;
    margin-top: 30px;
    width: 200px;
    height: 200px; 
}

.img3{
    background-image: url('gothel.png');
    background-size: contain; 
    background-repeat: no-repeat;
    background-position: center;
    margin-top: 30px;
    width: 200px;
    height: 200px; 
}

.img4{
    background-image: url('maximus.png');
    background-size: contain; 
    background-repeat: no-repeat;
    background-position: center;
    margin-top: 30px;
    width: 200px;
    height: 200px; 
}

.name{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    background-color: rgb(187, 138, 187) ;
    border-radius: 40px;
    box-shadow: 0px 1px 6px 1px rgb(54, 51, 51);
    color:rgb(248, 242, 153);
    width: 180px;
    height: 50px;
}

.more a{
    display:flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    text-decoration: none;
    margin-top: 50px;
    background-color: rgb(187, 138, 187) ;
    box-shadow: 0px 1px 6px 1px rgb(54, 51, 51);
    border-radius: 40px;;
    color:rgb(248, 242, 153);
    width: 140px;
    height: 50px;
}
</style>