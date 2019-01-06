<?php
if ( !isset($_GET["kode_game"])   || 
	 !isset($_GET["judul_game"])  ||
	 !isset($_GET["genre"])  	  ||
	 !isset($_GET["tgl_release"]) ||
	 !isset($_GET["jumlah_disk"]) ||
	 !isset($_GET["stock"]) 	  ||
	 !isset($_GET["gambar"])
	) {
	// redirect
	header("Location: index.php");
	exit;
}
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
            <tr>
                <td><?= $_GET["kode_game"]; ?></td>
                <td><?= $_GET["judul_game"]; ?></td>
                <td><?= $_GET["genre"]; ?></td>
                <td><?= $_GET["jumlah_disk"]; ?></td>
                <td><?= $_GET["stock"]; ?></td>
                <td><?= $_GET["tgl_release"]; ?></td>
                <td>
                	<img src="img/<?= $_GET["gambar"]; ?>">
                </td>
         </tr>
         </tbody>
    </table>
    </td>
   </div>
  </div>
</div>
<div class="clearfix">
	<a href="index.php">Kembali Ke Home</a>
</div>
<script type="text/javascript" href="assets/jquery/jquery-3.3.1.js"></script>
<script type="text/javascript" href="assets/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" href="assets/datatables/js/dataTables.semanticui.min.js"></script>
<script type="text/javascript" href="assets/datatables/js/semantic.min.js"></script>
</body>
</html>