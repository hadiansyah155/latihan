<?php 

  $array = array('saya <br>' ,10 );

  $aso = [
  	['Nama' => 'Hadiansyah1',
  	 'Kelas'=> 'Informatika',
  	],

  	['Nama' => 'Hadiansyah2',
  	 'Kelas'=> 'Informatika',
  	],

  	['Nama' => 'Hadiansyah3',
  	 'Kelas'=> 'Informatika',
  	]
  	];

  	foreach ($aso as  $value) {
  		echo $value["Nama"]."<br>";
  		echo $value["Kelas"]."<br>";
  	}
  	echo '<hr>';
  	$countaso = count($aso);
  	for ($i=0; $i < $countaso; $i++) { 
  		echo $aso[$i]["Nama"]."<br>";
  		echo $aso[$i]["Kelas"]."<br>";
  	}
 ?>