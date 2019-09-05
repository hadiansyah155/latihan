<?php

$arrNilai = array("ani" => 80,"otim" => 90,"Sri" => 75,"budi" => 85);
echo "<b>array sebelum pengaturan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort($arrNilai);
reset($arrNilai);
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort($arrNilai);
reset($arrNilai);
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

 ?>