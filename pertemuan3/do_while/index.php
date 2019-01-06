<?php
// -- Pengulangan --
// for 
// while = check dulu kondisi nya apabila kondisi true jalankan (tidak akan di jalankan apabila kondisi awal memang false)
// --> do.. while = jalankan dulu lalu check kondisi nya (ketika kondisi false block akan di jalankan dahulu 1 kali / apabila true akan di jalankan sepenuhn)
// foreach : pengulangan khusus array
$i = 0;
do {
	echo "Hello World! <br>";
$i++;
} while ( $i < 5 );