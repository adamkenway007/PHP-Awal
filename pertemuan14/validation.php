
<?php
require 'functions.php';

function tambah($data) {
$nimError ="";
$namaError ="";
$emailError ="";
$jurusanError ="";
$gambarError ="";
// On submitting form below function will execute.
if(isset($_POST['submit'])){

	if (empty($_POST["nim"])) {
		$nameError = "Nim harus di isi";
		} else {
		$nim = tambah($_POST["nim"]);
			// check name only contains letters and whitespace
			if (!preg_match("/^[0-9]*$/",$nim)) {
				$nimError = "Hanya huruf abjad yang di perbolehkan";
			}
		}

	if (empty($_POST["nama"])) {
		$nameError = "Nama harus di isi";
		} else {
		$nama = tambah($_POST["nama"]);
			// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$nama)) {
				$namaError = "Hanya huruf abjad yang di perbolehkan";
			}
		}


	if (empty($_POST["email"])) {
		$emailError = "Email is required";
		} else {
		$email = tambah($_POST["email"]);
			// check if e-mail address syntax is valid or not
			if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email)) {
			$emailError = "Format Email Salah";
			}
		}

	if (empty($_POST["jurusan"])) {
		$jurusanError = "jurusan harus di isi";
		} else {
		$jurusan = tambah($_POST["jurusan"]);
			// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$jurusan)) {
				$jurusanError = "Hanya huruf abjad yang di perbolehkan";
			}
		}


	if (empty($_POST["gambar"])) {
		$gambarError = "gambar harus di isi";
		} else {
		$gambar = tambah($_POST["gambar"]);
			// check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$gambar)) {
				$gambarError = "Hanya huruf abjad yang di perbolehkan";
			}
		}

 	}
 	
 	$query =  "INSERT INTO mahasiswa VALUES ('','$nama','$nim','$email','$jurusan','$gambar')"; 
	mysqli_query($conn ,$query);
}

//php code ends here
?>