<?php
require 'functions.php';

// ambil dara di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {
	// cek apakah data berhasil di ubahkan atau tidak
 	if ( ubah($_POST) > 0 ) { // Merupakan function dari mysqli_affected_rows()
		echo "<script>
				alert('data gagal diubahkan!');
				document.location.href = 'index.php';
			 </script>";
	} else {
		echo "<script>
				alert('data berhasil diubahkan!');
				document.location.href = 'index.php';
			 </script>";	
	}
}
  //}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Di Ubah data mahasiswa</title>
</head>
<body>
	<h1>Di Ubah data mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" id="id" name="id" value="<?= $mhs["id"]; ?>">
		<input type="hidden" id="id" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>" required>
			</li>
			<li>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" value="<?= $mhs["nim"]; ?>" required>
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>" required>
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>" required>
			</li>
			<li>
				<label for="gambar">Gambar : </label><br>
				<img src="img/<?= $mhs['gambar']?>" width="40">
				<input type="file" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>"> 
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
	</form>

</body>
</html>