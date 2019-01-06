<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>

	<form action="proses.php?aksi=tambah" method="post">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" value="Simpan">Tambah Data</button>
			</li>
		</ul>
	</form>

</body>
</html>