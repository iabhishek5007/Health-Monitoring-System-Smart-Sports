<html>
<head>
    <title> Cadet Login </title>
    <link rel="stylesheet" type="text/css" href="styleadmincadetlogin.css">   
</head>
    <body>
    <div class="login-box">
    <img src="img/avatar.png" class="avatar">
        <h1>Welcome Cadet</h1>
       
            <form action="cadet_login_validation.php" method="POST">
            <p>Name</p>
            <input type="text" name="user" placeholder="Enter Your Name">
            <p>Player ID</p>
            <input type="text" name="pass" placeholder="Enter Player ID">

            <input type="submit" name="submit" value="Login">
            <a href="index.php">Back to Home Page</a>    
            </form>
        
        
        </div>
    
    </body>
</html>