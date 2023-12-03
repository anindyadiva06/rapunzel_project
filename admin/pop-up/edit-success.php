<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT SUCCESS</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="left-text"></div>
        </div>
        <div class="right">
            <h1>EDIT DATA SUCCESSED!</h1>
            <button class="ok"><a href="../profile/my-profile.html">OK</a></button>
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
    background-image: url('pop-up.png');
    background-size: 50% 100%;
    background-position: center right;
    background-attachment: fixed;
    width: 50vw;
    height: 100vh;
}

.right{
    display: flex;
    flex-direction: column;
    align-items: center; 
    justify-content: center;
    background: white;
    width: 50vw;
    height: 100vh;
    color: rgb(233, 226, 131);
    font-size: 25px;  
}

h1, h3, .ok {
    margin: 20px;
    font-weight: 100; 
}

.ok{ 
    background: #C489CD;
    border: none;
    padding: 5px;
    width: 500px;
    border-radius: 40px;
    cursor: pointer;
    margin: 30px;
}

button a{
    color: rgb(233, 226, 131);
    text-decoration: none;
    font-size: 50px;
}

.ok a{
    color: rgb(233, 226, 131);
}
 
</style>
