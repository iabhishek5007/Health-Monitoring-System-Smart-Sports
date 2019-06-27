
<?php

session_start();
$_SESSION["id"] = $_POST["id1"];
header('location:welcomeupdate.php');

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

$i1=$_SESSION["id"];
$date1=$_POST['days1'];
$a1 =$_POST['active1'];
$h1 =$_POST['happy1'];
$ca1 =$_POST['calm1'];
$co1 =$_POST['composed1'];
$ener1 =$_POST['energetic1'];

//$q= "UPDATE `activity` SET `days`='$date1',`ACTIVE`='$a1',`HAPPY`='$h1',`CALM`='$ca1',`COMPOSED`='$co1',`ENERGETIC`='$ener1','id'='$i1' where 'days'='$date1'";  

$q= "UPDATE `poms` SET `Date`='$date1',`Active`='$a1',`Happy`='$h1',`CDM`='$ca1',`Composeed`='$co1',`Energetic`='$ener1' WHERE  `Date`='$date1' and PlayerID=$i1";

//$qst=" UPDATE `activity` SET `ACTIVE`='$a',`HAPPY`='$h',`CALM`='$ca',`COMPOSED`='$co',`ENERGETIC`='$ener',`id`='$i' WHERE 'days'='$date' ";
 //mysql_query("UPDATE activity SET ACTIVE = $a, HAPPY = $h, CALM = $ca, COMPOSED = $co, ENERGETIC = $ener, id = $i  WHERE days = $date");
$qq=mysqli_query($con,$q);
if($qq == TRUE)
{
	echo "TRUE";
}
else
{
	echo "False";
}




?>