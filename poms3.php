<?php   
session_start();  
if(isset($_SESSION["sess_user"])){  
     
?> 
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		body{
			background-color: cyan;
			background-image: url("bg1.jpg");
		}
		btn-success{
			border-radius:0px;padding: 10px;
			width: 100%
		}
		label{
			font-size: 25px;
			color:black;
		}
		text{
			height: 50px;
		}


	</style>

</head>
<body>
	<h2 align="center">PERFORMANCE DATA OF CADET</h2>
	<br><br>
	<div class="conainer" align="center">
		<form action="data.php" method="post">
			
						<label>Enter ID to Fetch Data :</label>
						<input type="text" name="id11" placeholder="Player Id " required><br><br>
						<button type="submit" class="btn btn-success">FETCH DATA</button>
		    	
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