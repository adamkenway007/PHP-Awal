<?php
// Array Associative = array yang indexnya kita buat sendiri
// definisi sama seperti array numeric, kecuali
// key-nya adalah string yang kita buat sendiri
 $mahasiswa = 	[
                  [
	 				 "nama"     => "Edward Kenway",
					 "nrp"      => "043040023",
					 "jurusan"  => "Pirates",
					 "email"    => "edwardkenway@gmail.com",
					 "tugas"	=> [90, 80, 100],
					 "gambar"	=> "1.jpg"
				  ],
				  [
	 				 "nama"     => "Haytam Kenway",
					 "nrp"      => "043040023",
					 "jurusan"  => "Templar",
					 "email"    => "haytamkenway@gmail.com",
					 "gambar"	=> "2.jpg"
				  ],
				  [
	 				 "nama"     => "Connor Kenway",
					 "nrp"      => "043040023",
					 "jurusan"  => "Assassins's",
					 "email"    => "connorkenway@gmail.com",
					 "gambar"	=> "3.jpg"
					]
				];
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
                <th>Foto</th>
                <th>Nama</th>
                <th>Nrp</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach ( $mahasiswa as $mhs) : ?>
            <tr>
            	 <td>
                	<img src="img/<?= $mhs["gambar"]; ?>">
                </td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["nrp"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>     
         </tr>
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