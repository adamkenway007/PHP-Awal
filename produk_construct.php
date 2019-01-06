<?php


// Jualan Produk
// Game Legacy
// Game New
class Produk {
	public $judul,
	       $pemainUtama, 
	       $penerbit,
	       $harga;

	public function __construct( $judul = "judul", $pemainUtama = "pemainUtama", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul       = $judul;
		$this->pemainUtama = $pemainUtama;
		$this->penerbit    = $penerbit;
		$this->harga       = $harga;
	}

	public function getLabel() {
		return "$this->judul, $this->pemainUtama, $this->penerbit";
		// $this-> untuk memanggil variabel scope lain & untuk mengambil isi dari property di dalam class yang bersangkutan
	}
}
$produkz = new Produk("Da Capo");

$produk1 = new Produk("Da Capo II Dearest Marriage","Sakurai Yoshiyuki", "Circus", "49,00￥");

$produk2 = new Produk("Da Capo III R", "Katsuragi Kiyotaka", "Circus", "56,00￥");

$produk3 = new Produk("Da Capo 4", "Sagisawa Arisu", "Circus", "99,00￥");

echo "Legacy : " .$produkz->getLabel();
echo "<br>";
echo "Legacy : " .$produk1->getLabel();
echo "<br>";
echo "Legacy : " .$produk2->getLabel();
echo "<br>";
echo "New : " .$produk3->getLabel();