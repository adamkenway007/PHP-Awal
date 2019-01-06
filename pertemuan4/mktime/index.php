<?php
	// mktime
	// membuat sendiri detik sendiri dari detik yang sudah berlalu sejak 1 Januari 1970
	// mktime(0,0,0,0,0,0)
	//jam-menit-detik-bulan-tanggal-tahun
	echo "<br>";
	echo mktime(0,0,0,1,10,1998);
	echo "<br>";
	echo date("l, d-M-Y", mktime(0,0,0,1,10,1998));
?>