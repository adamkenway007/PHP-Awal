<?php
$rentaldvd = 	[
                  [
	 				 "kode_game"   => "043040023",
					 "judul_game"  => "Assassins Creed",
					 "genre"       => "Action , Adventure",
					 "tgl_release" => "13 Nov, 2007",
					 "jumlah_disk" => "1 DVD",
					 "stock"	   => "Ada",
					 "gambar"	   => "1.jpg"
				  ],
				  [
	 				 "kode_game"   => "043040054",
					 "judul_game"  => "Assassins Creed II",
					 "genre"       => "Action , Adventure",
					 "tgl_release" => "17 Nov, 2009",
					 "jumlah_disk" => "1 DVD",
					 "stock"	   => "Habis",
					 "gambar"	   => "2.jpg"
				  ],
				  [
	 				"kode_game"   => "043040054",
					"judul_game"  => "Assassins Creed Brotherhood",
					"genre"       => "Action , Adventure",
					"tgl_release" => "16 Nov, 2010",
					"jumlah_disk" => "1 DVD",
					"stock"	      => "Habis",
					"gambar"	  => "3.jpg"
					]
				];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game List</title>
</head>
<body>
<h1>Game List</h1>
<ul>
	<?php foreach ($rentaldvd as $gms) : ?>
		<li>
			<a href="index2.php?kode_game=<?= $gms["kode_game"]; ?>&judul_game=<?= $gms["judul_game"]; ?>&genre=<?= $gms["genre"]; ?>&tgl_release=<?= $gms["tgl_release"]; ?>&jumlah_disk=<?= $gms["jumlah_disk"]; ?>&stock=<?= $gms["stock"]; ?>&gambar=<?= $gms["gambar"]; ?>"><?= $gms["judul_game"]; ?></a>
		</li>
	<?php endforeach; ?>
</ul>

</body>
</html>