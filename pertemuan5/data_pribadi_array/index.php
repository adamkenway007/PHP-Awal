<?php
// Array Numeric
$mahasiswa = 	["Adam Backtiar Azhari", "043040023", "Teknik Informatika", "adambacktiarazhari@gmail.com"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
	
	<ul>
		<?php foreach ( $mahasiswa as $mhs) : ?>
			<li><?= $mhs; ?></li>
			<?php endforeach; ?>
	</ul>

	<ul>
		<li>Nama : <?= $mahasiswa[0]; ?></li>
		<li>NRP : <?= $mahasiswa[1]; ?></li>
		<li>Jurusan : <?= $mahasiswa[2]; ?></li>
		<li>Email : <?= $mahasiswa[3]; ?></li>
	</ul>


</body>
</html>