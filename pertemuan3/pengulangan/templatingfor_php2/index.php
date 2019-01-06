<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Endwhile</title>
	<style>
		.warna-baris {
			background-color: violet;
		}
		.warna-baris2 {
			background-color: purple;
		}
		h6.warna-text {
			font-color: red !important;
			text-decoration: none;
		}
		h6.warna-text2   {
			font-color: green !important;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for($i = 1; $i <= 5; $i++ ) : ?> <!-- Merupakan Cara Alternatif Ke 2 Dari Templating "endfor:" Merupakan Pembuka block statement -->
			<?php if ( $i % 2 == 1 ) : ?> 
			  <tr class="warna-baris">
			<?php else : ?>
				<tr class="warna-baris2">
			<?php endif; ?>
				<?php for ($j = 1; $j <= 5; $j++) : ?> 
					<?php if ($i) : ?>
						<td class="warna-text"><h6><?= "$i, $j"; ?></h6></td>
					<?php elseif($j) : ?>
						<td class="warna-text2"><h6><?= "$i, $j"; ?></h6></td>
					<?php endif; ?> <!-- Nilai "="  Digunakan untuk mencetak sesuatu-->
				<?php endfor; ?> <!-- Merupakan Cara Alternatif Ke 2 Dari Templating "endfor;" Merupakan Penutup  block statement--> 
	
			<?php endfor; ?> <!-- Merupakan Cara Alternatif Ke 2 Dari Templating "endfor;" Merupakan Penutup  block statement-->
 	</table>
</body>
</html>