<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['name'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$gender= $_REQUEST['gender'];
		$dob=$_REQUEST['dob'];
		if($username != null && $password != null && $email != null){
			$user = $username."|".$password."|".$email."|".$gender."|".$dob."\r\n";
			$file = fopen("../models/user_F.txt", 'a');
			fwrite($file, $user);
			fclose($file);	
			header('location: ../views/login.html');
		}else{
			echo "null submission..";
		}
	}	
?>