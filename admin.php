<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:admin_login_page.php");  
} else {  
?> 
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">  
            
                <meta name="viewport" content="width=device-width, initial-scale=1">  
                    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->  
                    <title>Admin Panel</title>  
                    <!-- Bootstrap -->  
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">  
                        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->  
                        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->  
                        <!--[if lt IE 9]>  
                        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  
                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  
                        <![endif]--> 
<style>
                            body {
                                font-family: "Lato", sans-serif;
                                background-image: url(img/bg1.jpg);
                            }

                            .navbar
                            {
                                margin-bottom: 0;
                                border-radius: 0;
                                background-color: #5E4485;
                                color: #fff;
                                padding: 1% 0;
                                font-size: 1.5em;
                                border: 0;
                            }

                            .navbar-brand
                            {
                                float: left;
                                min-height: 45px;
                                padding: 0 15px 15px;
                            }

                            .navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus, .navbar-inverse .navbar-nav .active a:hover
                            {
                                color: #fff;
                                background-color: #5E4485;
                            }

                            .navbar-inverse .navbar-nav li a 
                            {
                                color: #D5D5D5;
                            }
                            


</style>
</head>
<body style="background-color:#5E4485 ;">  
                        <nav class="navbar navbar-inverse" role="navigation">  
                            <div class="container-fluid"></div>
                            <div class="navbar-header">  
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
                                    <span class="icon-bar"></span>  
                                    <span class="icon-bar"></span>  
                                    <span class="icon-bar"></span>  
                                </button>  
                                <a class="navbar-brand" href="#"> <img src="img/logo.jpg"></a>  
                            </div>  
                            <div class="navbar-collapse collapse" id="myNavbar">  
                                <ul class="nav navbar-nav navbar-right">  
                                    <li class="active">
                                        <h1>Welcome to the Admin Panel of POMS SNTI</h1>
  
                                    </li> 
                                    <li>  
                                        <a href="coachnanka.php"> Coach Report</a>  
                                    </li> 
                                    <li>  
                                        <a href="poms.php"> POMS Report</a>  
                                    </li> 
                                    
                                    <li>  
                                        <a href="admin_logout.php">Logout</a>  
                                    </li> 
                                </ul>  
                            </div>  
                            <!-- jQuery (necessary for Bootstrap's JavaScript plugins)   Order is important -->  
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
                            <!-- Include all compiled plugins (below), or include individual files as needed -->  
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
                        </div>
                        </nav>

</body>
</html> 
<?php  
}  
?>