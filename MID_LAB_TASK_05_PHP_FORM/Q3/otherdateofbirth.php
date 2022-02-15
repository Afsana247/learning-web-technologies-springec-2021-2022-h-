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