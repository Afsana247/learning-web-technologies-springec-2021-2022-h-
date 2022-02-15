
<?php


if(isset($_REQUEST['submit']))
{
if($_REQUEST['name']== null)
{
	echo "Please inter your name....";
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
	<form >
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="name" value=""><br>
			<hr>
			<input type="submit" name="submit"value="Submit"><br>
		</fieldset>
	
	
	</form>

</body>
</html>