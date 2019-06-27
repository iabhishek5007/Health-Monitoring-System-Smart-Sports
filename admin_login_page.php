<html>
<head>
    <title> Admin Login </title>
    <link rel="stylesheet" type="text/css" href="styleadmincadetlogin.css">   
</head>
    <body>
    <div class="login-box">
    <img src="img/logo.jpg" class="avatar">
        <h1>Welcome Admin</h1>
       
            <form action="admin_login_validation.php" method="POST">
            <p>Username</p>
            <input type="text" name="user" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="index.php">Back To Home Page</a>    
            </form>
        
        
        </div>
    
    </body>
</html>