<?php


if(isset($_GET['submit']))
{
if($_GET['dd']== null)
{
	echo "Invalid Birthday....";
}
elseif ($_GET['mm']== null) 
{
		echo "Invalid Birthday....";
}
elseif ($_GET['yyy']== null) 
{
		echo "Invalid Birthday....";
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
			<legend>DATE OF BIRTH</legend>
			<table>
				<tr>
					<td>dd</td>
					<td>mm</td>
					<td>yyy</td>
			
	          </tr>
				<tr>
					<td><input type="dd" name="dd" value="">/</td>
			            <td><input type="mm" name="mm" value="">/</td>
			            <td><input type="yyy" name="yyy" value=""><br></td>
	</tr>
</table>
			
		<hr>
			<input type="submit" name="submit"value="Submit"><br>
		</fieldset>
	</form>

</body>
</html>