<?php



  $aso = [
  	['Judul:' => '<h1>Judul:Belajar PHP & MySQL untuk Pemula',

  	 'Penulis:'=> '<h3>Penulis:Admin SMK',
  	],

  
  	['Judul:' => '<h1>Judul:Tutorial PHP dari Nol hingga Mahir',

  	 'Penulis:'=> '<h3>Penulis:Admin SMK',
  	],

  	['Judul:' => '<h1>Judul:Membuat Aplikasi Web dengan PHP',

  	 'Penulis:'=> '<h3>Penulis:SMK ASSLAAM',
  	]
  	];

  	foreach ($aso as  $value) {
  		echo $value["Judul:"]."<br>";
  		echo $value["Penulis:"]."<br>";
  		echo '<hr>';
  	}


  
 ?>