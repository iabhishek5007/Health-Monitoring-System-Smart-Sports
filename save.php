
<?php

session_start();
header('location:poms3.php');

$con =mysqli_connect('localhost','root');
if($con)
{
	echo "connection successful";
}
else
{
	echo "no connection";
}
mysqli_select_db($con,'sntidb');
$i=$_POST['id'];
$date=$_POST['days2'];
$a =$_POST['active'];
$h =$_POST['happy'];
$ca =$_POST['calm'];
$co =$_POST['composed'];
$ener =$_POST['energetic'];

$qy = " INSERT INTO `poms`(`Date`, `Active`, `Happy`, `CDM`, `Composeed`, `Energetic`, `PlayerID`) VALUES ('$date','$a','$h','$ca','$co','$ener','$i')";
//$qy= " INSERT INTO `activity`(`days`, `ACTIVE`, `HAPPY`, `CALM`, `COMPOSED`, `ENERGETIC`,'id') VALUES ('$date','$a','$h','$ca','$co','$ener','$i')";
mysqli_query($con,$qy);





?>