<!DOCTYPE html>
<html>
<head>
	<title>Records</title>
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


        body{
            background-image: url("img/snti.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
        }
        table td {
            transition: all .5s;
        }
        
        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }

        .data-table th, 
        .data-table td {
            border: 1px solid #ffc399;
            padding: 7px 16px;
        }
        

        /* Table Header */
        .data-table thead th {
            background-color: #10e8b2;
            color: black;
            border-color: coral !important;
            border-width: 7px;
            border-style: inset;
            text-transform: uppercase;
        }

        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }

        .data-table tbody tr:nth-child(even) td {
            background-color: #fff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: coral !important;
            border-width: 7px;
            border-style: inset;
        }
    </style>
</head>
<body>

<?php

session_start();


$con =mysqli_connect('localhost','root');
if($con)
{
	//echo "connection successful";
}
else
{
	echo "no connection";
}
mysqli_select_db($con,'sntidb');


$i =$_POST['id11'];
/*

$date=$_POST['days2'];
$a =$_POST['active'];
$h =$_POST['happy'];
$ca =$_POST['calm'];
$co =$_POST['composed'];
$ener =$_POST['energetic'];

$qy= " INSERT INTO `activity`(`days`, `ACTIVE`, `HAPPY`, `CALM`, `COMPOSED`, `ENERGETIC`) VALUES ('$date','$a','$h','$ca','$co','$ener')";*/

$sql = "SELECT * FROM poms where `PlayerID`= '$i'";

$d = mysqli_query($con,$sql);
$total = mysqli_num_rows($d);

if($total != 0)
{
 
 ?>

 <table align="center" border="1px solid black" class="data-table">
    <thead>
     	<tr>
         		<th>DAYS</th>
         		<th>ACTIVE</th>
         		<th>HAPPY</th>
         		<th>CALM</th>
         		<th>COMPOSED</th>
         		<th>ENERGETIC</th>
     	</tr>
    </thead>
    <tbody>
         <?php
         while ($resu = mysqli_fetch_assoc($d))
          {
         	echo "<tr>
         	<td>".$resu['Date']."</td>
         	<td>".$resu['Active']."</td>
         	<td>".$resu['Happy']."</td>
         	<td>".$resu['CDM']."</td>
         	<td>".$resu['Composeed']."</td>
         	<td>".$resu['Energetic']."</td>
         	  </tr>";

         }

        }


        else
        {
        	$link_address1="welcomesave.php"; 
         
            echo '<div class="my_class">';
            echo "<center>";
            echo "<h1> NO RECORD FOUND </h1> ";
            echo "<a href='$link_address1'>BACK</a>";  
            echo "<center>";
            echo '</div>';
        	echo "";
        }

        ?>
      </tbody>

</table>
<div align="center">
<a href="poms.php"> BACK</a>
</div>
</body>
</html>
