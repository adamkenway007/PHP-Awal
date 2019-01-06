<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if (isset($_POST["submit"]) ) : ?>
	<h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
<?php endif; ?>
  <form action="" method="post">
	Masukkan Nama
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">Send</button>
  </form>
</body>
</html>