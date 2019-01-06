<?php


// Jualan Produk
// Game Legacy
// Game New
class Produk {
	public $judul = "judul",
	       $penulis = "penulis", 
	       $penerbit = "penerbit",
	       $harga = 0;

	public function SayHello() {
		return "Hello World";
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
		// $this-> untuk memanggil variabel scope lain & untuk mengambil isi dari property di dalam class yang bersangkutan
	}
}

$produk1 = new Produk();
$produk1->judul = "Da Capo"; // untuk menimpa property
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Da Capo II Dearest Marriage";
$produk2->tambahProperty = "Fandisk";
var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Da Capo III";
$produk3->penulis = "yozuca";
$produk3->penerbit = "Circus";
$produk3->harga = "56,00￥";
var_dump($produk3);

echo "<br>Game : $produk3->judul, $produk3->penulis, $produk3->penerbit";
echo '<br>';
echo $produk3->SayHello();
echo '<br>';
echo $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul = "Da Capo 4";
$produk4->penulis = "Sagisawa Arisu";
$produk4->penerbit = "Circus";
$produk3->harga = "99,00￥";

echo "<br>";
echo "Legacy : " .$produk3->getLabel();
echo "<br>";
echo "New : " .$produk4->getLabel();