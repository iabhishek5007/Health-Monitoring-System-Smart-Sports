<?php
//index.php

$error = '';
$name = '';
$email = '';

$message = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	if(empty($_POST["name"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
	}
	else
	{
		$name = clean_text($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
		}
	}
	if(empty($_POST["email"]))
	{
		$error .= '<p><label class="text-danger">Please Re-Enter your Email</label></p>';
	}
	else
	{
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p><label class="text-danger">Invalid email format</label></p>';
		}
	}
	
	if(empty($_POST["message"]))
	{
		$error .= '<p><label class="text-danger">Player ID is required</label></p>';
	}
	else
	{
		$message = clean_text($_POST["message"]);
	}
	if($error == '')
	{
		require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '465';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'bcrecsam@gmail.com';					//Sets SMTP username
		$mail->Password = '9431951416';					//Sets SMTP password
		$mail->SMTPSecure = 'ssl';							//Sets connection prefix. Options are "", "ssl" or "tls"
							//Sets the From email address for the message
		$mail->FromName = 'SNTI POMS PORTAL';				//Sets the From name of the message
		
		$mail->AddAddress($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML				
		$mail->Subject = 'Registration Successful';				//Sets the Subject of the message
		$mail->Body = "<h1> We have received your Registration Successfully with Player ID provided after Registration . </h1> Please Remember Your Player ID is : " .$_POST["message"] ;						//An HTML or plain text message body
		if($mail->Send())								//Send an Email. Return true on success or false on error
		{
			$error = '<label class="text-success">You will get a confirmation E-mail from us soon !!!</label>';
		}
		else
		{
			$error = '<label class="text-danger">There is an Error ! Please Retry Later</label>';
		}
		$name = '';
		$email = '';
		
		$message = '';
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title> Email Confirmation</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
			<style type="text/css">
        .my_class{
            width: 900px;
            height: 700px;
            background: rgba(0, 0, 0, 0.5);
            color: cyan;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 50px 50px;
            font-size: 1.4em;
        }
        a{
        	color:white;
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
		<br />
		<div class="my_class" align="center">
		<div class="container" >
			<div class="row">
				<div class="col-md-8" >
					<h3 align="center"> Fill Up the Fields as used While Registering On Portal</h3>
					<br />
					<div align="center">
					<img src="img/logo.jpg">
					</div><br>
					<?php echo $error; ?>
					<form method="post">
						<div class="form-group">
							<label>Re-Enter Your Name</label>
							<input type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" />
						</div>
						<div class="form-group">
							<label>Re-Enter Your Email</label>
							<input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
						</div>
						
						<div class="form-group">
							<label>Re-Enter Your Player ID</label>
							<input type="text" name="message" class="form-control" placeholder="Enter Player ID" value="<?php echo $message; ?>">
						</div>
						<div class="form-group" align="center">
							<input type="submit" name="submit" value="Submit" class="btn btn-info" />
						</div>
						<a href="index.php"> Back To Home Page</a>
					</form>
				</div>
			</div>
		</div>
	    </div>
	</body>
</html>





