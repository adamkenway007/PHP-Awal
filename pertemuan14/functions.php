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
	$nama = htmlspecialchars(mysqli_real_escape_string($conn, $data["nama"]));
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	//	$gambar = htmlspecialchars($data["gambar"]);

	
	//upload gambar
	$gambar = upload();
	if(  !$gambar ) {
		return false;
	}
	

	// query insert data
	$query =  "INSERT INTO mahasiswa VALUES ('','$nama','$nim','$email','$jurusan','$gambar')"; 
	mysqli_query($conn ,$query);
	}

	
	function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang di upload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!')
			 </script>";
		return false;
	}

	// cek apakah yang dupload adalah gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.',$namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('yang anda upload bukan ekstensi gambar 'jpg','jpeg','png'!')
			 </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar maks 1 Mb'!')
				</script>";
		return false;
	}

	// lolos pengecekan, gambar siap di upload
	// generate nama gambar baru
	$namaFileBaru  = uniqid();
	$namaFileBaru .= '.' . $namaFile;
	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

		return $namaFileBaru;
}

	function ubah($data) {
	global $conn;
	$id = $data["id"];
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars(mysqli_real_escape_string($conn, $data["nama"]));
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	// cek apakah tidak ada gambar yang di upload
	if( $_FILES['gambar']['error'] === 4 ) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
		unlink('img/' . $gambarLama);
	}

	// cek apakah user pilih gambar baru atau tidak
	
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
	//$id = $_GET["id"];
	//if ( hapus($id) > 0 ) { // Merupakan function dari mysqli_affected_rows()
	//	$gambar = upload();
	//	unlink("images/$id" . $gambar);
	//}
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	mysqli_query($conn, "SET @num := 0");
	mysqli_query($conn, "UPDATE mahasiswa SET id = @num := (@num+1)");
	mysqli_query($conn, "ALTER TABLE mahasiswa AUTO_INCREMENT = 1");
	$gambar = upload();
	if(file_exists('file_path')) {
    //@unlink('file_path');
	unlink("images/$id" . $gambar);
	//
	//mysqli_query($conn,$query);
  }
}

function search($keyword) {
	$query = "SELECT * FROM mahasiswa 
			  WHERE
			  nama LIKE '%$keyword%' OR
			  nim LIKE '%$keyword%' OR
			  email LIKE '%$keyword%' OR
			  jurusan LIKE '%$keyword%'
			  ";
	return query($query);
}

function register($data) {
	global $conn;

	$username = htmlspecialchars($_POST["username"]);
	$password = htmlspecialchars($_POST["password"]);
	$email = htmlspecialchars($_POST["email"]);

	// cek username sudah pernah ada atau belum
	$cek_username = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if( mysqli_num_rows($cek_username) === 1 ) {
		echo "<script>
				alert('username sudah terpakai!');
				document.location.href = '';
			  </script>";
		return false;
	}

	// tambahkan user baru ke database
	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// insert ke DB
	$sql = "INSERT INTO user VALUES ('', '$username', '$password', '$email', CURRENT_TIMESTAMP)";
	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
}
function registrasi($data) {
	global $conn;

	$username = htmlspecialchars($_POST["username"]);
	$password = htmlspecialchars($_POST["password"]);
	$password2 = htmlspecialchars($_POST["password2"]);
	$email = htmlspecialchars($_POST["email"]);

	// cek username sudah pernah ada atau belum
	$cek_username = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if( mysqli_num_rows($cek_username) === 1 ) {
		echo "<script>
				alert('username sudah terpakai!');
				document.location.href = '';
			  </script>";
		return false;
	}
	// cek konfirmasi password
	 if( $password != $password2){ // kondisi jika password = password2
		  echo "<script>
				  alert('konfirmasi tidak password sesuai')
			    <script>";
			    			 //tamplikan password benar
		} else {
			echo "<script>
				  alert('konfirmasi password sesuai')
			    <script>";
		
			    
	}

	// tambahkan user baru ke database
	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// insert ke DB
	$sql = "INSERT INTO user VALUES ('', '$username', '$password', '$email', CURRENT_TIMESTAMP)";
	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
}
/*
function register($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"])); // strip'[slashes menghilangkan backslash
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


	// cek konfirmasi password
	 if( $password != $password2){ // kondisi jika password = password2
		  echo "<script>
				  alert('konfirmasi tidak password sesuai')
			    <script>";
			    			 //tamplikan password benar
		} else {
			echo "<script>
				  alert('konfirmasi password sesuai')
			    <script>";
		
			    
	}
	return 1;
	// enkripsi password
	//$password = password_hash($password, PASSWORD_DEFAULT);
	//var_dump($password); die;
}*/

?> 