<?php   
session_start();  
if(isset($_SESSION["sess_user"])){  
     
?> 
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="stylepoms.css">

</head>
<body>
	<h2 align="center">PERFORMANCE OF CADET</h2>
	
	<div class="conainer">
		<form action="save.php" method="post">
			<section>
			<div class="wrapper">
				ENTER PLAYER ID : <input type="text" name="id" placeholder="Enter Here" autocomplete="off">
			</div><br>
			</section>
	<section>		
	<table align="center">
		<tr>
			<th>DAYS</th>
			<th>ACTIVE</th>
			<th>HAPPY</th>
			<th>CALM</th>
			<th>COMPOSED</th>
			<th>ENERGETIC</th>
		</tr>

		<tr>
		<td><input type="text" name="days2" value="<?php echo date("Y/m/d");?>"  required></td>
		<td><input type="text" name="active" required></td>
		<td><input type="text" name="happy" required></td>
		<td><input type="text" name="calm" required></td>
		<td><input type="text" name="composed" required></td>
		<td><input type="text" name="energetic" required></td>
		
		</tr>
	</table>
	</section>
<div class="wrapper">
	<button type="submit" class="btn btn-success">SAVE</button>

	
	<a href="poms2.php">UPDATE</a><br>
	<a href="admin.php"> BACK TO ADMIN PANEL</a>
</div>
</form>
</div>

</body>
</html>
<?php 
}
else {

 	header("location: admin_login_page.php");
 } 
  
?>