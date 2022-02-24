<?php
session_start();

if(isset($_REQUEST['submit']))
{
	$username=$_REQUEST['name'];
	$password=$_REQUEST['password'];
	if($username !=null && $password!=null)
	{
		if($username==$password)
		{
			$status="true";
			$_SESSION['status']='status';
			header('Location:loggedindas.php');
			$_SESSION['viewprofile']='status';
			header('location:viewprofile.php');
			$_SESSION['editprofile']='status';
			header('location:editprofile.php');
			$_SESSION['changeprofilepictute']='status';
			header('location:profilepicture.php');
			$_SESSION['changepassword']='status';
			header('location:changepassword.php');
			$_SESSION['logout']='status';
			header('location:logout.php');

		}
		else{
			echo"invalid usere";
		}

	}
	else{
		echo "null submittion....";
	}
}
