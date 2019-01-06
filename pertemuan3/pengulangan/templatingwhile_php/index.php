<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php $i = 1; 
			while( $i <= 3 ) : ?> <!-- Merupakan Cara Alternatif Ke 2 Dari Templating "endfor:" Merupakan Pembuka block statement -->
			  <tr>
				<?php $j = 1; 
					while( $j <= 5 ) : ?> 
					<td><?= "$i, $j"; ?></td> <!-- Nilai "="  Digunakan untuk mencetak sesuatu-->
				<?php $j++; 
					endwhile; ?> <!-- Merupakan Cara Alternatif Ke 2 Dari Templating "endfor;" Merupakan Penutup  block statement--> 
			  </tr>
			<?php $i++; endwhile; ?>
	</table>
</body>
</html>