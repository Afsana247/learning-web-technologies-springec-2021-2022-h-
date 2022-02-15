<?php


if(isset($_GET['submit']))
{
if($_GET['name']== null)
{
	echo "Please inter your name....";
}
else {
	echo "Submitted....";
}
}


?>