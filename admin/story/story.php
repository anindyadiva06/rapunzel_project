<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="left-text"><img src='navbar1.png'></div>
            <div class="story">
                <img src="disney.png">
                <p>Rapunzel is a princess who has long and beautiful hair. He was locked in a high tower by an evil witch disguised as his adoptive mother. The witch uses Rapunzel's hair as a ladder to climb up and down the tower. Rapunzel grew up without knowing anything about the outside world.<br/><br/>
                   One day, a prince passed by and heard Rapunzel's beautiful voice singing, he fell in love with Rapunzel and tried to meet and save her. After various obstacles and intrigues, the prince manages to reach Rapunzel. They fall in love with each other.<br/><br/>
                   However, an evil wizard discovers their plans and separates them. Rapunzel is finally forced to live separately from the prince. However, eventually the power of love brought them together again and they lived happily ever after.<br/><br/>
                </p>
            </div>
        </div>
        <div class="right">
            <div class="right-text"><a href="../index/index.php"><img src="arrow.png"></a></div>
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
    width: 100vw;
    height: 100vh;
}

.left{
    background: white;
    width: 50vw;
    height: 100vh;
}

.right{
    background-image: url('story.jpeg');
    background-size: 50% 100%;
    background-position: center right;
    background-attachment: fixed;
    box-shadow: -22px -3px 21px 2px rgba(0,0,0,0.22);
    width: 50vw;
    height: 100vh;
}

.left-text img{
    width: 85px;
    height: 65px;
}

.right-text{
    position: absolute;
    top: 25px; 
    right: 25px;
}

.right-text img{
    width: 40px;
}

.story img{
    width: 190px;
}

.story{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    max-height: 100vh;
    overflow-y: auto; 
}

.story p{
    line-height: 1.5;
    margin: 30px;
    margin-top: 50px;
    color: rgb(233, 226, 131);
    font-size: 18px;
}

</style>