<?php

$arrNilai = array("ani" => 80,"otim" => 90,"Sri" =>75,"budi" => 85);
echo "<b>array sebelum pengaturan</b>";
echo "<prev>";
print_r($arrNilai);
echo "</prev>";

sort($arrNilai);
reset($arrNilai);
echo "<b>array setelah pengaturan dengan sort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

rsort($arrNilai);
reset($arrNilai);
echo "<b>array setelah pengaturan dengan rsort()<b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

 ?>