<?php 
 
$a = array('ahmad',19,true,3.19 );
//menampikan array satu-satu
echo "array menggunakan echo<br>";

echo $a[0]."<br>";
echo $a[3]."<br>";

echo "<br>";
echo "array menggunakan looping for<br>";
for ($i=0; $i < count($a); $i++) { 
	echo "array - ".$a[$i]."<br>";
}

echo "<br>";
foreach ($a as $data => $value) {
	echo "array".$data.$value."<br>";
}
?> 