<?php
// Bisa Menggunakan Kutip `` = Satu Atau Kutip "" = Dua Di Gunakan Salah Satu
// Penulisan sintaks PHP
// 1. PHP di dalam HTML

// Variable dan Tipe Data
// Variable
// Aturan Variable = tidak boleh diawali dengan angka, tapi boleh mengandung angka,tidak Boleh ada spasi,hati hati menggunakan tanda hubung misan "-" karena di kawathirkan di sangka tanda minus
echo "<h3>0. Interpolasi = Menampilkan Nama Variabel Bukan Isi Variabel</h3>";
$nama = "Adam Backtiar Azhari";
echo 'Halo, nama $nama'; // Interpolasi = Menampilkan Nama Variabel Bukan Isi Variabel
echo "<br />";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Belajar PHP</title>
</head>
<body>
	<h4>----------------------------------------------</h4>
	<h3>1. PHP di dalam HTML</h3>
	<h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
	<p><?php echo "ini adalah paragraft"; ?></p>

</body>
</html>

<?php
// 2. HTML di dalam PHP
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Belajar PHP</title>
</head>
<body>
	<h4>----------------------------------------------</h4>
	<?php 
		echo "<h3>2. HTML di dalam PHP</h3>";
		echo "<h1>Halo, Selamat Datang Adam <h1/>";
	?>
</body>
</html>