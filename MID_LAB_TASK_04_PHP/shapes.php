
	<?php

echo "star shapes";
for ($i=0; $i <=3 ; $i++) { 
	for ($j=$i; $j <=2*$i-1 ; $j++)
	 { 
		echo "* ";
	}
	echo "<br><br><br>";
}

echo "Number";
for ($r=3; $r >=1; $r--) {
echo "<br>"; 
for ($n=1; $n <=$r ; $n++) { 
	print($n);
		
}
}
echo "<br><br><br>";
echo "charecter";
echo "<br>";
$k=65;
for ($i=1; $i <=3 ; $i++) { 
	for ($j=1; $j <=$i; $j++)
	 { 
		echo chr($k)," ";
		$k++;
	}
	echo "<br>";
}

?>
