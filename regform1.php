<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="regform1style.css">	
</head>
<body>
<div class="container" align="left">
	<div class="row">
		<div class="col-md-12 col-md-offset-3" id="form" >
			<center><b class="registration">Cadet Registration Form</b></center><br>
			<div align="center">
			<img src="img/logo.jpg" alt="SNTI LOGO" align="center">
			</div><br>
			<marquee bgcolor=grey direction="up"><center><b class="registration">Before filling up the form candidates are advised to carefully go through the Relevant Instructions</b></center><br>

			</marquee ><span><marquee direction="right"><a href="#">NEW NOTIFICATION !</a></marquee></span>
			<center><a href="index.php">Go to Home Page </a></center>
			<form action="reg_validation.php" method="POST"><fieldset>
				<legend>Personal Details :</legend>
				<div class="form-group">
					
					<label>Name :</label>
					<input type="text" name="username" class="form-control text" placeholder="Enter Your Name Here" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Father's Name :</label>
					<input type="text" name="fathername" class="form-control text" placeholder="Enter Your Father's Name Here" autocomplete="off" required>
				</div>
				<div class="form-group">
					<label>Mother's Name :</label>
					<input type="text" name="mothername" class="form-control text" placeholder="Enter Your Mother's Name Here" autocomplete="off" required>
				</div>


			
				<div class="form-group">
					<label>Date of Birth :</label>
					<input type="Date" name="bday" class="form-control text" >
				</div>
				
				<div class="form-group">
					<label> Select Gender :</label>
					<input type="radio" name="gender1" <?php if(isset($gender1) && $gender1=="MALE") echo "checked";?>value="MALE">Male
		<input type="radio"  name="gender1" <?php if(isset($gender1) && $gender1=="FEMALE") echo  "checked";?>value="FEMALE">Female
		<input type="radio"  name="gender1" value="OTHERS" <?php if(isset($gender1) && $gender1=="OTHERS") echo "checked";?>value="OTHERS">Others
				</div>
			    

						
				
			        </fieldset>

				<!--^^^^^^^^^^^Personal Details Fieldset Ends-->

				<fieldset>
				<legend>Contact Details :</legend>	
				<div class="form-group">
					<label>E-Mail ID :</label>
					<input type="email" name="email" class="form-control text" placeholder="abc@example.com" autocomplete="off" required>
				</div>	
				<div class="form-group">
					<label>Mobile No :</label>
					<input type="tel" name="number1" class="form-control text" placeholder="Enter Your 10 Digit Mobile Number" required>
				</div>	
				<div class="form-group">
					<label>Correspondence Address :</label>
					<textarea class="form-control" rows="3" placeholder="Enter Correspondence Address" name="caddrs"></textarea>
				</div>
				<div class="form-group">
					<label>Permanent Address :</label>
					<textarea class="form-control" rows="3" placeholder="Enter Permanent Address" name="paddrs"></textarea>
				</div>
				</fieldset>

				<!--^^^^^^^^^^^^^^Conatact details over^^^^^^^^^^^^^^^^^^^^^^--> 

				<fieldset>
				<legend>Education/Achievement/Occupation Details : </legend>
				
				<div class="form-group">
					<label> Select Qualification :</label>
					<select class="form-control text" required name="qual">
						<option value="Metriculation" name="qual">Metriculation</option>
						<option value="Intermediate" name="qual">Intermediate</option>
						<option value="Undergraduation" name="qual">Undergraduation</option>
						<option value="Postgraduation" name="qual">Postgraduation</option>
						<option value="Diploma" name="qual">Diploma</option>
						<option value="Others" name="qual">Others</option>
					</select>
				</div>

				<div class="form-group">
					<label> Select Occupation :</label>
					<select class="form-control text" required name="o">
						<option value="Student" name="o">Student</option>
						<option value="Service" name="o">Service</option>
						<option value="Self-Employed" name="o">Self-Employed</option>
						<option value="Business" name="o">Business</option>
						<option value="Others" name="o">Others</option>
					</select>
				</div>
			    
			    
				<div class="form-group">
					<label>Achievements : </label>
					<textarea class="form-control" rows="3" placeholder="Enter Achievements" name="achieve"></textarea>
				</div>
			   

			   <div class="form-group">
			   		<label>Area of Interest</label>
			   		<textarea name="ai" class="form-control text" placeholder="Seperate Using a '(Comma)'" required></textarea> 

			   </div>
			    </fieldset>



				<fieldset>
				<legend>Medical Details : </legend>

				<div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<label> Select Blood Group :</label>
					<select class="form-control text" required name="b1">
						<option value="AB+" name="b1">AB+</option>
						<option value="AB-" name="b1">AB-</option>
						<option value="A+" name="b1">A+</option>
						<option value="A-" name="b1">A-</option>
						<option value="B+" name="b1">B+</option>
						<option value="B-" name="b1">B-</option>
						<option value="B-" name="b1" >B-</option>
					    <option value="O+" name="b1">O+</option>
					    <option value="O-" name="b1">O-</option>
					</select>
				</div>
			    </div>
			    <div class="col-md-6">
				<div class="form-group">
					<label>Identification Mark : </label>
					<textarea  name="idm" class="form-control text" placeholder="It should be like A mole on left cheek " required></textarea>
				</div>
			    </div>
			    </div>

				

				<div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<label>Weight (In KGS) : </label>
					<input type="Number" name="weight" class="form-control text" placeholder="Enter Only Numeric Value Not In Decimal" required>
				</div>
			    </div>
				<div class="col-md-6">
				<div class="form-group">
					<label>Height (In Centimetes) : </label>
					<input type="Number" name="height" class="form-control text" placeholder="IN CM" required>
				</div>	
				</div>	
				</div>



				<div class="form-group">
					<label>Any Allergies ( Please Specify ): </label>
					<input type="radio" name="ALLERGY" <?php if(isset($ALLERGY) && $ALLERGY=='YES') echo "checked";?> value="YES">YES 
    <input type="radio" name="ALLERGY" <?php if(isset($ALLERGY) && $ALLERGY=='NO') echo "checked";?> value="NO">NO
				</div>
				<div class="form-group">
					<label>Any Disability ( Please Specify ): </label>
					<input type="radio" name="di" <?php if(isset($di) && $di=='YES') echo "checked";?> value="YES">YES
    <input type="radio" name="di"<?php if(isset($di) && $di=='NO') echo "checked";?> value="NO">NO
				</div>
			    </fieldset>

			    <fieldset>
			    	<legend>Uplaod Image Signature and ID Proof : </legend>
			    	<div class="form-group">
					<label>Select Image To Upload ( Max 500 KB) : </label>
					<input type="file" name="pic"  class="form-control File" required>
				   </div>

				   <div class="form-group">
					<label>Select Signature To Upload ( Max 500 KB) : </label>
					<input type="file" name="pic1"  class="form-control File" required>
				   </div>

				   <div class="form-group">
					<label>Select ID Type : </label>
								<select name="is1" class="form-control text"> 
			        		<option value="SELECT">Select</option>
			        		<option value="PAN-CARD">PAN-CARD</option> 
			        		<option value="AADHAR CARD">AADHAR CARD</option> 
			        		<option value="VOTER ID CARD">VOTER ID CARD</option>
			        		 <option value="PASSPORT">PASSPORT</option> 
			        		    </select>
        			<label>Select ID To Upload ( Max 500 KB) : </label>
					<input type="file" name="pic2"  class="form-control File" required>
				   </div>

			    </fieldset>


			    <div class="form-group">
					<input type="submit"  class="btn btn-primary" value="Submit">	
				</div>

			</form>

		</div>
	</div>



</div>
</body>
</html>