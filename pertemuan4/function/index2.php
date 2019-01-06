<?php
date_default_timezone_set('ASIA/Jakarta');
setlocale(LC_ALL, array('id_id.UTF-8','id_ID@asia','in_ID','indonesia'));
 $hour = date("G"); 
      $minute = date("i"); 
      $second = date("s"); 
      $msg = " Today is " . date("l, M. d, Y.") . " And the time is " . date("g:i a"); 

      if ( (int)$hour == 0 && (int)$hour <= 9 ) { 
          $greet = "Good Morning,"; 
      } else if ( (int)$hour >= 10 && (int)$hour <= 11 ) { 
          $greet = "Good Day,"; 
      } else if ( (int)$hour >= 12 && (int)$hour <= 15 ) { 
          $greet = "Good Afternoon,"; 
      } else if ( (int)$hour >= 16 && (int)$hour <= 23 ) { 
          $greet = "Good Evening,"; 
      }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= $greet.$msg ?></h1>
	<!-- <h1><?php #echo salam(); ?></h1> -->
</body>
</html>
