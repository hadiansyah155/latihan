<?php
$arrNilai = array ("ajeng" =>90,"mamat" => 70,"ucup" =>87,"Aang" =>95,"syahrul" =>75);
foreach ($arrNilai as $nama => $nilai) {
	echo "<br>";
	if ($nilai > 85) {
		echo "<hr>nama : $nama,nilai : $nilai,grade A";
	}elseif ($nilai > 75) {
		echo "<hr>nama : $nama,nilai : $nilai,grade B";
	}elseif ($nilai > 65) {
		echo "<hr>nama : $nama,nilai : $nilai,grade C";
	}
}
?>