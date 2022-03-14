<?php 
session_start();
if(isset($_REQUEST['submit'])){
	$account=$_REQUEST['account'];
	$withdrawAmmount=$_REQUEST['number'];
	if($account !=null && $withdrawAmmount!= null){
		$acc=account-withdrawAmmount;
		echo $acc;
	
		else{
			echo"insufficient account";
		}
		}

	}
	
?> 