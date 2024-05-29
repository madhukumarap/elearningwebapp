<?php
	 
	error_reporting(0);
	require('db.php');
	
	if(isset($_POST['submit'])){
		$name = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$to = 'manjunath9122@gmail.com';
		$subject = 'Form Submission';	
		$message = "Name: ".$name."\n";
		$headers = "From: ".$email;
		
		if (mail($to, $subject, $message, $headers)) {
			echo "<h1>Sent Succesfully"." ".$name.",  </h1>";
		}
		else{
			echo"Something went wrong";
		}
	}

?>