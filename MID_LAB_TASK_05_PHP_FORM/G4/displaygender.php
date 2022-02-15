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
			
				<input type="radio" name="gender" value="Male"<?php if(isset($_GET['submit'])&& $_GET['gender']=='Male')echo "checked" ?>/>Male
			    <input type="radio" name="gender" value="Male"<?php if(isset($_GET['submit'])&& $_GET['gender']=='Female')echo  "checked"  ?>/>Female
			   <input type="radio" name="gender" value="Male"<?php if(isset($_GET['submit'])&& $_GET['gender']=='other')echo  "checked"   ?>/>other
	
		<hr>
			<input type="submit" name="submit"value="Submit"><br>
		</fieldset>
	</form>

</body>
</html>       