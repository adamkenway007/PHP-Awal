<?php
require 'functions.php';

$id = $_GET["id"];

 	if ( hapus($id) > 0 ) { // Merupakan function dari mysqli_affected_rows()
		echo "<script>
				alert('data gagal dihapus!');
				document.location.href = 'index.php';
			 </script>
			 ";
	//	echo "data gagal dihapus!";
	} else {
		echo "<script>
				alert('data berhasil dihapus!');
				document.location.href = 'index.php'
			 </script>
			 ";
	//		echo "data berhasil dihapus!";	
	}
?>