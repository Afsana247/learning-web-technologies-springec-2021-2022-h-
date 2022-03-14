<?php 
session_start();
if(isset($_REQUEST['submit'])){
	$email=$_REQUEST['name'];
	//$password=$_REQUEST['password'];
	if($email !=null){
		$file=fopen('../models/user_F.txt', 'r');
		$user=fread($file, filesize('../models/user_F.txt'));
		fclose($file);
		$abc = explode('|', $user);

		if (trim($abc[0]==$name))
		{
			$_SESSION['status']='true';
			setcookie('status','true',time()+3600,'/');
			echo "password :".$abc[1];
		}
		else{
			echo"invalid email/password";
		}

	}
	else{
		echo"null submission...";

	}
}
?> 