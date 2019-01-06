<?php
// Array Associative = array yang indexnya kita buat sendiri
// definisi sama seperti array numeric, kecuali
// key-nya adalah string yang kita buat sendiri
 $rentaldvd = 	[
                  [
	 				 "kode_game"   => "043040023",
					 "judul_game"  => "Assassins Creed",
					 "genre"       => "Action , Adventure",
					 "tgl_release" => "13 Nov, 2007",
					 "jumlah_disk" => "1 DVD",
					 "stock"	   => "Ada",
					 "gambar"	   => "1.jpg"
				  ],
				  [
	 				 "kode_game"   => "043040054",
					 "judul_game"  => "Assassins Creed II",
					 "genre"       => "Action , Adventure",
					 "tgl_release" => "17 Nov, 2009",
					 "jumlah_disk" => "1 DVD",
					 "stock"	   => "Habis",
					 "gambar"	   => "2.jpg"
				  ],
				  [
	 				"kode_game"   => "043040054",
					"judul_game"  => "Assassins Creed Brotherhood",
					"genre"       => "Action , Adventure",
					"tgl_release" => "16 Nov, 2010",
					"jumlah_disk" => "1 DVD",
					"stock"	      => "Habis",
					"gambar"	  => "3.jpg"
					]
				];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rental DVD Game</title>
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

<h1 class="judul">Game List</h1>
	<div class="container">
      <div class="row">
        <div class="col-md-12">
        <td>
		<table id="example" class="ui celled table table-bordered" style="width:auto;">
        <thead>
            <tr>
                <th>Kode Game</th>
                <th>Judul Game</th>
                <th>Genre</th>
                <th>Jumlah Disk</th>
                <th>Stock</th>
                <th>Tanggal Rilis</th>
                <th>Preview</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach ( $rentaldvd as $gms) : ?>
            <tr>
                <td><?= $gms["kode_game"]; ?></td>
                <td><?= $gms["judul_game"]; ?></td>
                <td><?= $gms["genre"]; ?></td>
                <td><?= $gms["jumlah_disk"]; ?></td>
                <td><?= $gms["stock"]; ?></td>
                <td><?= $gms["tgl_release"]; ?></td>
                <td>
                	<img src="img/<?= $gms["gambar"]; ?>">
                </td>
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