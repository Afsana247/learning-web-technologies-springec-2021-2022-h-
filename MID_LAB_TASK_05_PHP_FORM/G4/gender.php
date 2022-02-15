<?php

if(isset($_GET['submit']))
{
if($_GET['gender']== null)
{
	echo "Please put your gender....";
}


else 
{
	echo "Submitted....";
}

}



?>
<html>
<head>

	<title></title>
</head>
<body>
	<form  method="GET" action="">
		<fieldset>
			<legend>GENDER</legend>
			
				<input type="radio" name="gender" value="Male">Male
			    <input type="radio" name="gender" value="Female">Female
			    <input type="radio" name="gender" value="other">other
	
		<hr>
			<input type="submit" name="submit"value="Submit"><br>
		</fieldset>
	</form>

</body>
</html>       