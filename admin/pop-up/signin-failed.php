<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN FAILED</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="left-text"></div>
        </div>
        <div class="right">
            <img src="warning.png">
            <h1>SIGN IN FAILED!</h1>
            <h3>Check your username or password again</h3>
            <button class="ok"><a href="../login/signin.php">OK</a></button>
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
    font-weight: 400; 
}

h1, h3, .ok {
    margin: 20px;
    font-weight: 100; 
}

.ok{ 
    background: #C489CD;
    border: none;
    padding: 10px;
    width: 500px;
    border-radius: 40px;
    cursor: pointer;
    margin: 10px;
}

button a{
    color: rgb(233, 226, 131);
    text-decoration: none;
    font-size: 50px;
}

.ok a{
    color: rgb(233, 226, 131);
}

.right img{
    width: 100px;
}
</style>
