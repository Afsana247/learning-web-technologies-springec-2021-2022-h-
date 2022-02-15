
<?php

$mail="";
if(isset($_REQUEST['submit']))
{
if($_REQUEST['mail']== null)
{
	echo "Please inter your Email....";
}
else {
	$mail=$_REQUEST['mail'];
}
}


?>


<html>
<head>

	<title></title>
</head>
<body>
	<form method="GET" action="" >
		<fieldset>
			<legend>EMAIL</legend>
			<input type="mail" name="mail" value="<?=$mail?>"><br>
			<hr>
			<input type="submit" name="submit"value="Submit"><br>
		</fieldset>
	
	
	</form>

</body>
</html>