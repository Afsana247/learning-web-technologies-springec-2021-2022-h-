
<?php


if(isset($_REQUEST['submit']))
{
if($_REQUEST['mail']== null)
{
	echo "Please inter your Email....";
}
else {
	echo "Submitted....";
}
}


?>


<html>
<head>

	<title></title>
</head>
<body>
	<form method="POST" action="" >
		<fieldset>
			<legend>EMIL</legend>
			<input type="mail" name="mail" value=""><br>
			<hr>
			<input type="submit" name="submit"value="Submit"><br>
		</fieldset>
	
	
	</form>

</body>
</html>