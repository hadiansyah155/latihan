<?php
$nim = 0415004400;
$nama ='Hadiansyah';
$umur= 18;
$nilai= 82.25;
$status=true; 

echo "NIM        :".$nim."<br>";
echo "Nama       :$nama <br>"; 
print"umur       :".$umur; print "<br>";
printf("nilai    :%.3f<br>",$nilai);
if ($status) 
	echo "status : aktif";
else
  echo "status   :tidak aktif";
 ?>