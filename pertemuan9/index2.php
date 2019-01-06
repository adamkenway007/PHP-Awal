<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root","","phpdasar");

// ambil data dari table
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) tabel dari object result
// mysqli_fetch_row() // mengembalikan array numeric
// mysqli_fetch_assoc() // mengembalikan array assosiatif 
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()

// while ( $mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs);
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="assets/semantic-ui/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/datatables/css/dataTables.semanticui.min.css">
	<script type="text/javascript" href="assets/bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
		.clearfix {
			clear: both;
			text-align: center; 
			float: left;
		}
		h1.judul {
			text-align: center;
		}
	</style>
</head>
<body>

<h1 class="judul">Daftar Mahasiswa</h1>
	<div class="container">
      <div class="row">
        <div class="col-md-12">
        <td>
		<table id="example" class="ui celled table table-bordered" style="width:auto;">
        <thead>
            <tr>
            	<th>No.</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Nrp</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php $i= 1; ?>
        	<?php while( $row = mysqli_fetch_assoc($result)) : ?>
            <tr>
            	<td><?= $i; ?></td>
            	 <td>
                	<img src="img/<?= $row["gambar"]; ?>">
                </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td>
                	<a href="">Edit</a>
                	<a href="">Hapus</a>
                </td>     
         </tr>
         <?php $i++; ?>
         <?php endwhile; ?>
         </tbody>
     </table>
    </td>
  </div>
 </div>
</div>
<script type="text/javascript" href="assets/jquery/jquery-3.3.1.js"></script>
<script type="text/javascript" href="assets/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" href="assets/datatables/js/dataTables.semanticui.min.js"></script>
<script type="text/javascript" href="assets/datatables/js/semantic.min.js"></script>
</body>
</html>