<?php 
session_start();
if(isset($_REQUEST['submit'])){
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	if($email !=null && $password!= null){
		$file=fopen('../models/user_F.txt', 'r');
	

		while(!feof($file))
		{
			$user=fgets($file);
			$abc = explode('|', $user);
			if (trim($abc[2]==$email && trim($abc[1])==$password))
		{
			$_SESSION['status']='true';
			setcookie('status','true',time()+3600,'/');
			header('location:../views/dashboard.php?name='.$abc[0]);
		}
		else{
			echo"invalid email/password";
		}
		}
		
		

	}
	else{
		echo"null submission...";

	}
}
?> 