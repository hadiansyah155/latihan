<?php

$a = [
     ["nama : ujang" ,"kelas : XI RPL-1",'alamat' => "Cibaduyut"],
	 ["nama : mahmud" ,"kelas : XI RPL-2 ",'alamat' => "Kopo Permai"],
	 ["nama : ucok" ,"kelas : XI RPL-3 ",'alamat' =>"Lw.panjang"],
	];

echo "<pre>";
print_r($a);
echo "</pre>";

$mode = current($a)[2]; 
  echo $mode."<br>";
$mode = current($a)[3];
  echo $mode."<br>";
$mode = current($a)[2]; 
  echo $mode."<br>"; 

 ?>