<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root","","phpdasar");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];	
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars(mysqli_real_escape_string($conn, $data["nama"]))
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query =  "INSERT INTO mahasiswa VALUES ('','$nama','$nim','$email','$jurusan','$gambar')"; 
			  //('','$nama','$nim','$email','$jurusan','$gambar')";
	mysqli_query($conn ,$query);
	} 
	//return mysqli_effected_rows($conn);

	function ubah($data) {
	global $conn;
	$id = $data["id"];
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars(mysqli_real_escape_string($conn, $data["nama"]))
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query =  "UPDATE mahasiswa SET
				 nama    = '$nama',
				 nim     = '$nim',
				 email   = '$email',
				 jurusan = '$jurusan',
				 gambar  = '$gambar'
			    WHERE id = $id
				 ";
	mysqli_query($conn ,$query);
	} 

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	mysqli_query($conn, "SET @num := 0");
	mysqli_query($conn, "UPDATE mahasiswa SET id = @num := (@num+1)");
	mysqli_query($conn, "ALTER TABLE mahasiswa AUTO_INCREMENT = 1");
	//mysqli_query($conn,$query);
}

?>