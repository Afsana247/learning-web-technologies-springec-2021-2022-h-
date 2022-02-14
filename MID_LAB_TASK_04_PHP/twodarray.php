<?php


print("The array to declare");
echo"<br>";
$arrays=[
	'a1'=>['r1'=>1,'r2'=>2,'r3'=>3,'r4'=>'A'],
	'a2'=>['r1'=>1,'r2'=>2 ,'r3'=>'B','r4'=>'C'],
	'a3'=>['r1'=>1,'r2'=>'D','r3'=>'E','r4'=>'F']

];



foreach ($arrays as $a) {
	echo $a['r1']." ".$a['r2']." " .$a['r3']." ".$a['r4']."\n";
	echo "<br>";

}
echo"<br><br><br>";
print("Shapes to print");
echo"<br>";
for ($r=3; $r >=1; $r--) {
echo "<br>"; 
for ($n=1; $n <=$r ; $n++) { 
	print($n);
		
}
}

echo"<br><br>";
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