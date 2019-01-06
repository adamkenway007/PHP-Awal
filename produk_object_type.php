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
		return "$this->pemainUtama, $this->penerbit";
		// $this-> untuk memanggil variabel scope lain & untuk mengambil isi dari property di dalam class yang bersangkutan
	}

}

class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (￥. {$produk->harga}) <br>";
		return $str;
	}
}

$produk1 = new Produk("Da Capo II Dearest Marriage","Sakurai Yoshiyuki", "Circus", "49,00");

$produk2 = new Produk("Da Capo III R", "Katsuragi Kiyotaka", "Circus", "56,00");

$produk3 = new Produk("Da Capo 4", "Sagisawa Arisu", "Circus", "99,00");

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
$infoProduk2 = new CetakInfoProduk();
echo $infoProduk2->cetak($produk2);
<1infoProduk3></1infoProduk3> = new CetakInfoProduk();
echo $infoProduk3->cetak($produk3);