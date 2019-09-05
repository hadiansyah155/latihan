<?php

$arrNilai = array("ani" => 80,"otim" => 90,"Sri" => 75,"budi" => 85);
echo "<b>array sebelum pengaturan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>array setelah pengaturan dengan ksort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

krsort($arrNilai);
reset($arrNilai);
echo "<b>array setelah pengaturan dengan krsort()<b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

 ?>