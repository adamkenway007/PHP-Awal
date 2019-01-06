<?php
// Variabel Scope / lingkup variabel
// global = variabel yan bisa di gunakan secara global untuk bisa di gunakan di mana saja
$x = 10;

function tampilX() {
	global $x;
	echo $x;
}

tampilX();
?>
<?php
// Superglobals variabel yang bisa di gunakan tanpa di definisikan lebih dahulu karena sudah tersedia dari php
// Merupakan Array Associtive
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
echo "<br>";
var_dump($_GET);
echo "<br>";
var_dump($_POST);
echo "<br>";
echo $_SERVER["SERVER_NAME"];;
?>
<?php
// $_GET
echo "<br>";
$_GET["nama"]    = "Edward Kenway";
$_GET["nrp"]     = "043040023";
$_GET["jurusan"] = "Pirates";
$_GET["email"]   = "edwardkenway@gmail.com";
var_dump($_GET);
?>