<?php
function area($length, $width)
{
	echo $length*$width ."\n";
	
}


function perimeter($length, $width)
{
	echo 2*($length*$width);
	
}
print(" The area of a Rectangle=");
area(3,2);
echo "<br>";
print(" perimeter=");
perimeter(2,2);


?>