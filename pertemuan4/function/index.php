<?php
date_default_timezone_set('ASIA/Jakarta');
setlocale(LC_ALL, array('id_id.UTF-8','id_ID@asia','in_ID','indonesia'));
Function salam( $waktu, $nama = "Admin"){
	  $hour = strftime( "%H", time());
      if ( (int)$hour == 5 && (int)$hour <= 9 ) { 
          $waktu = "Pagi";
      } else if ( (int)$hour >= 10 && (int)$hour <= 14 ) { 
          $waktu = "Siang"; 
      } else if ( (int)$hour >= 15 && (int)$hour <= 17 ) { 
          $waktu = "Sore"; 
      } else if ( (int)$hour >= 16 && (int)$hour <= 23 ) { 
          $waktu = "Malam";
      } else if ( (int)$hour >= 0 && (int)$hour <= 4 ) { 
          $waktu = "Petang,"; 
      }  
	return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam(strftime( "%H %A", time())); ?></h1>
	<!-- <h1><?php #echo salam(); ?></h1> -->
</body>
</html>