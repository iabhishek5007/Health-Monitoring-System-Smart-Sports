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
	<h2 align="center">UPDATE THE PERFORMANCE OF CADET</h2>
	
	<div class="conainer">
		<form action="update.php" method="post">
			<section>
			<div class="wrapper">
				<input type="text" name="id1" placeholder="Enter Your ID No" autocomplete="off">
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
		<td><input type="text" name="days1" value="<?php echo date("Y-m-d"); ?>"></td>
		<td><input type="text" name="active1" required></td>
		<td><input type="text" name="happy1" required></td>
		<td><input type="text" name="calm1" required></td>
		<td><input type="text" name="composed1" required></td>
		<td><input type="text" name="energetic1" required></td>
		
		</tr>

      
	</table>
	</section>
<div class="wrapper">
	
	<button type="submit" class="btn btn-primary">UPDATE</button>

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