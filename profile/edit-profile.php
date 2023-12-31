<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="prop">
                <div class="top">
                    <img src="sun.png">
                </div>
                <div class="acc">
                    <img src="acc.png">
                </div>
            </div>
            <div class="bottom">
                <div class="box-1">
                    <p style="text-align: center;">EDIT PROFILE</p>
                </div>
                <div class="form-profile">
                    <form action="edit-profile.php" method="post">
                        <div class="input-box1">
                            <label>Name</label>
                            <input type="text">
                        </div>
                        <div class="input-box2">
                            <label>Bio</label>
                            <input type="password" >
                        </div>
                    </form>
                </div>
                <div class="btn">
                    <button class="edit"><a href="save-profile.php">SAVE</a></button>
                    <button class="delete"><a href="close-profile.php">CLOSE</a></button>
                </div>
            </div>
            <div class="right">
                <div class="right-text"><a href="../index/index.php"><img src="arrow.png"></a></div>
            </div>
        </div>
    </div>
</body>
</php>


<style>

@import url('https://fonts.googleapis.com/css?family=Irish Grover');
*, php, body{
        margin: 0;
        padding: 0;
        font-family: 'Irish Grover';
}

.container{
    width: 100%;
    height: 100%;
    background-image: linear-gradient(90deg, rgba(129,128,159,0.8181818181818181) 0%, rgba(255,255,255,0.4290091036414566) 0%), url('bg-profile.png');
    background-size: 48% 150%;
    background-position: center 30%;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
}

.wrapper{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%; 
    margin: auto;
}

.prop{
    position: relative;
}

.top img{
    width: 190px;
    opacity: 0.7;
}

.acc img{
    position: absolute;
    width: 150px;
    top : 20px;
    right : 25px;
    border-radius: 50%;
}

.form-profile{
    width: 300px;
    border-radius: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.input-box1{
    background-color: #C489CD;
    width: 300px;
    margin-top: 30px;
    margin-bottom: 10px;
    padding-bottom: 20px;
    border-radius: 50px;
    position: relative;
    display: flex;
    align-items: center;
}

.input-box2{
    background-color: #C489CD;
    width: 300px;
    margin-top: 30px;
    margin-bottom: 10px;
    padding-bottom: 20px;
    border-radius: 40px;
    position: relative;
    display: flex;
    align-items: center;
}

.input-box1 input, .input-box2 input{
    width: 100%; 
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 2px solid rgb(233, 226, 131);
    color: rgb(233, 226, 131);
    padding: 10px; 
    font-size: 15px;
    font-weight: 500;
    margin-top: 30px;
    margin-left: 20px;
    margin-right: 20px;
    box-sizing: border-box;
}

.input-box1 label, .input-box2 label{
    color: rgb(233, 226, 131);
    position: absolute; 
    top: 30%; 
    left: 10px; 
    transform: translateY(-50%); 
    pointer-events: none;
    margin-right: 10px; 
}

.bottom {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-image: url('bg-box.png');
    width: 400px;
    height: 380px;
    border-radius: 70px;
}

.bottom .box-1
{
    width: 200px;
    background-color: #C489CD;
    color: rgb(233, 226, 131);
    border-radius: 20px;
    margin-top: 5px;
    padding: 10px;
    font-size: 20px;
}

.btn{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 500px;
    border-radius: 20px;
    margin-bottom: 5px;
}

.edit a, .delete a{
    text-decoration: none;
    font-size: 17px; 
}
.edit{
    background: #C489CD;
    color: rgb(233, 226, 131);
    border: none;
    padding: 10px;
    width: 150px;
    border-radius: 40px;
    cursor: pointer;
    margin: 10px;
}

.edit a{
    color: rgb(233, 226, 131);
}

.delete{
    background: rgb(233, 226, 131);
    text-decoration: none;
    border: none;
    padding: 10px;
    width: 150px;
    border-radius: 40px;
    cursor: pointer;
    margin: 10px;
}

.delete a{
    color: #C489CD;
}

.right-text{
    position: absolute;
    top: 25px; 
    right: 25px;
}

.right-text img{
    width: 40px;
}
</style>
