<?php
require "config.php";
	
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
	
		$dob = $_REQUEST['dob'];	
		$city = $_REQUEST['city'];
		$gender = $_REQUEST['gender'];
		
		$insert = "insert into `stud1`(`name`,`email`,`dob`,`city`,`gender`) 
			values ('$name','$email','$dob','$city','$gender')";
	
		
		$res = mysqli_query($con,$insert);
	
	if($res == 1)
		echo"Record Inserted";
	else
		echo"Record Not Inserted";
	
		
	header("Location:view.php")
	

?>