<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Templating</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for($i = 1; $i <= 3; $i++ ) { ?> <!-- Merupakan Cara Alternatif Ke 2 Dari Templating "{ ?>" Merupakan Pembuka block statement -->
			  
			  <tr>
				<?php for ($j = 1; $j <= 5; $j++) { ?> 
					<td><?php echo "$i, $j"; ?></td>
				<?php } ?>	<!-- Merupakan Cara Alternatif Ke 2 Dari Templating "} ?>" Merupakan Penutup block statement -->
			  </tr>
			<?php } ?>
	</table>
</body>
</html>