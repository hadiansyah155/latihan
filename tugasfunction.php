<?php
 function segitiga($alas,$tinggi) {
 	echo "<h1>Luas segitiga</h1<br>";
 	echo "alas : $alas <br> tinggi : $tinggi <br>";
 	echo "menghitung luas segitiga : " . $alas  *$tinggi / 2;
 }
$a = 8;
$b = 2;
segitiga($a,$b);

function lingkaran($phi,$diameter,$rad) {
	echo "<h1>Luas lingkaran</h1> <br> diameter : $diameter <br> ";
	echo "Jari-jari : $rad <br>";
	echo "Luas lingkaran : ".$phi * $rad * $rad."cm<br>";
}
$phi = 3.14;
$rad = 8;
$diameter = 16;

lingkaran($phi,$diameter,$rad);
?>