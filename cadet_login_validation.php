
<html>
<head>
    <title>CADET FAULT ENTRY</title>
    <style type="text/css">
        .my_class{
            width: 420px;
            height: 220px;
            background: rgba(0, 0, 0, 0.5);
            color: cyan;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;
            font-size: 1.2em;
        }
        a{
            color: cyan;
        }

        body{
            background-image: url("img/snti.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
        }
    </style>
</head>
<body>




<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','','sntidb');
  
    $query=mysqli_query($con,"SELECT * FROM  `cadet_reg_details` WHERE name='".$user."' AND PlayerID='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['name'];  
    $dbpassword=$row['PlayerID'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: cadet.php");  
    }  
    } 
    else {  

    $link_address="cadet_login_page.php";   
    echo '<div class="my_class">';
    echo "<center>";
    echo "Invalid Name or Player!";
    echo "<br><br><br>";
    echo "<a href='$link_address'> GO BACK AND TRY INSERTING CORRECT DATA</a>";  
    echo "<center>";
    echo '</div>';
  
    }  
  
} else { 
    $link_address="cadet_login_page.php";   
    echo '<div class="my_class">';
    echo "<center>"; 
    echo "All fields are required!"; 
    echo "<br><br><br>";
    echo "<a href='$link_address'> GO BACK AND TRY INSERTING CORRECT DATA</a>";   
    echo "<center>";
    echo '</div>';
}  
}  
?>
</body>
</html>