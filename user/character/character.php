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
                <li><a href="../index/index.html">HOME</a></li>
                <li><a href="character.html">CHARACTER</a></li>
                <li><a href="../activity/activity.html">ACTIVITY</a></li>
            </ul>
            <a href="../profile/my-profile.html"><img class='acc' src="acc.jpg"></a>
        </nav>
        <div class="main">
           
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
    background: linear-gradient(90deg, rgba(129,128,159,0.8181818181818181) 0%, rgba(70,45,74,0.6217532467532467) 0%), url('wallpaper.jpeg');
    background-size: cover;
    background-position: center center;
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

.acc{
    width : 50px;
    height: 50px;
    border-radius: 50%;
    padding-top: 5px;
    padding-bottom: 5px;
    margin-right: 20px;
}


</style>