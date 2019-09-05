<?php

$gol = 20;

if ($gol >10) {
 	echo "mendali emas, dengan total cetak gol :".$gol;
 	switch ($gol) {
 		case '20':
 			echo "mendapatkan bonus 100jt";
 			break;
 		
 	}
 } elseif ($gol > 8) {
 	echo "mendali perak,dengan total cetak gol :".$gol;
 	switch ($gol) {
 		case '9':
 			echo "mendapatkan bonus 80jt";
 			break;
 		}

 } 	elseif ($gol > 7) {
 	echo "mendali perak,dengan total cetak gol :".$gol;
 	switch ($gol) {
 		case '5':
 			echo "mendapatkan bonus 50jtt".$gol;
 			break;
 		}
 }elseif ($gol > 4) {
 	echo "mendali perak,dengan total cetak gol :".$gol;
 	switch ($gol) {
 		 default:
 			echo "tidak mendapatkan bonus";
 			break;
 		}
 }
 ?>
