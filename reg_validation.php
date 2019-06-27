<!DOCTYPE html>
<html>
<head>
	<title>Validated</title>
	<style type="text/css">
        .my_class{
            width: 420px;
            height: 520px;
            background: rgba(0, 0, 0, 0.5);
            color: cyan;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;
            font-size: 1.4em;
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

session_start();

$msg="";
$con =mysqli_connect('localhost','root','','sntidb');



$name = $_POST['username'];
$fname = $_POST['fathername'];
$mname = $_POST['mothername'];
$do = $_POST['bday'];
$gender = $_POST['gender1'];

$emai = $_POST['email'];
$phn = $_POST['number1'];
$coresaddr = $_POST['caddrs'];
$permaddr = $_POST['paddrs'];

$qualify = $_POST['qual'];
$occupation = $_POST['o'];
$achvmnts = $_POST['achieve'];
$areainterest = $_POST['ai'];


$bg = $_POST['b1'];
$identification = $_POST['idm'];
$wt = $_POST['weight'];
$ht = $_POST['height'];
$allergic = $_POST['ALLERGY'];
$disablty = $_POST['di'];


$picture = $_POST['pic'];
$sign = $_POST['pic1'];
$iddetails =$_POST['is1'];
$idprof = $_POST['pic2'];



$qy= " INSERT INTO `cadet_reg_details`(`name`, `fname`, `mname`, `gender`, `dob`, `bgroup`, `idfmark`, `height`, `weight`, `occupation`, `qualification`, `achievements`, `paddr`, `caddr`, `email`, `mobno`, `interest`, `disability`, `allergy`, `cpic`, `csign`, `cid`, `idtype`) VALUES ('$name','$fname','$mname','$gender','$do','$bg','$identification','$ht','$wt','$occupation','$qualify','$achvmnts','$permaddr','$coresaddr','$emai','$phn','$areainterest','$disablty','$allergic','$picture','$sign','$idprof','$iddetails')";






$result = mysqli_query($con,$qy);
$qy1="SELECT * FROM `cadet_reg_details` WHERE name='$name' ORDER BY 'PlayerID' DESC limit 1";

$run2=mysqli_query($con, $qy1);

if ($run2==TRUE) {

 while($data=mysqli_fetch_assoc($run2))
 {
 	$msg = $data['PlayerID'];
 } 

  $link_address1="regform1.php"; 
  $link_address2="smtpuponregistration.php" ; 
    echo '<div class="my_class">';
    echo "<center>";
    echo "<h1> Registered Successfully </h1> Your Player ID is  " . $msg;
    echo "<br><br>";
    echo "Please Note Down Your Player ID For Login Purpose";
    echo "<br>";
    echo "<a href='$link_address2'> GET CONFIRMATION ON EMAIL </a>";
    echo "<br><br>";
    echo "<a href='$link_address1'> Back To Registration Page </a>";  
    echo "<center>";
    echo '</div>';
 
} 
?>
</body>
</html>