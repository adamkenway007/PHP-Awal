<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php $i = 1; 
			do{ "<td><?= '$i, $j'; ?></td>" $i++; } : ?> <!-- Merupakan Cara Alternatif Ke 2 Dari Templating "endfor:" Merupakan Pembuka block statement -->
			  <tr>
				<?php $j = 1; 
					while( $j <= 5 ) : ?> 
					 <!-- Nilai "="  Digunakan untuk mencetak sesuatu-->
				<?php $j++; 
					endwhile; ?> <!-- Merupakan Cara Alternatif Ke 2 Dari Templating "endfor;" Merupakan Penutup  block statement--> 
			  </tr>
			<?php ( $i <= 3 ); endwhile; ?>
	</table>
</body>
</html>

<!--<?php
// -- Pengulangan --
// for 
// while = check dulu kondisi nya apabila kondisi true jalankan (tidak akan di jalankan apabila kondisi awal memang false)
// --> do.. while = jalankan dulu lalu check kondisi nya (ketika kondisi false block akan di jalankan dahulu 1 kali / apabila true akan di jalankan sepenuhn)
// foreach : pengulangan khusus array
#$i = 0;
#do {
#	echo "Hello World! <br>";
#$i++;
#} while ( $i < 5 ); 
?>-->