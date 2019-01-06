<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
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
    <div class="clearfix">
    </div>
   <br /><br />
	<div class="container">
        <a class="add" href="tambah.php">Tambah Data</a>
        <br>
      <div class="row">
        <div class="col-md-12">
        <td>
		<table id="example" class="ui celled table table-bordered" style="width:auto;">
        <thead>
            <tr>
            	<th>No.</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	<?php $i= 1; ?>
        	<?php foreach( $mahasiswa as $mhs ) : ?>
            <tr>
            	<td><?= $i; ?></td>
            	 <td>
                	<img src="img/<?= $mhs["gambar"]; ?>">
                </td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["nim"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
                <td>
                	<a href="">Edit</a>
                	<a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Apakah Anda Yakin');">Hapus</a>
                </td>     
         </tr>
         <?php $i++; ?>
         <?php endforeach; ?>
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