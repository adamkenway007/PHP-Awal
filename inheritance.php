<?php


// Jualan Produk
// Game Legacy
// Game New
class Produk {
	public $judul,
	       $pemainUtama, 
	       $penerbit,
	       $harga,
	       $timeSpendM,
	       $timeSpendL;

	public function __construct( $judul = "judul", $pemainUtama = "pemainUtama", $penerbit = "penerbit", $harga = 0, $timeSpendM = 0, $timeSpendL = 0 ) {
		$this->judul       = $judul;
		$this->pemainUtama = $pemainUtama;
		$this->penerbit    = $penerbit;
		$this->harga       = $harga;
		$this->timeSpendM  = $timeSpendM;
		$this->timeSpendL  = $timeSpendL;
	}

	public function getLabel() {
		return "$this->pemainUtama, $this->penerbit";
		// $this-> untuk memanggil variabel scope lain & untuk mengambil isi dari property di dalam class yang bersangkutan
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (￥. {$this->harga})";

		return $str;
	}

}

class Medium extends Produk {
	public function getInfoProduk() {
	$str = "Medium : {$this->judul} | {$this->getLabel()} (￥. {$this->harga}) ~ {$this->timeSpendM} Hours.";
	return $str;
  }
}

class Long extends Produk {
	public function getInfoProduk() {
	$str = "Long : {$this->judul} | {$this->getLabel()} (￥. {$this->harga}) ~ {$this->timeSpendL} Hours.";
	return $str;
  }
}

class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (￥.{$produk->harga})";
		return $str;
	}
}

$produk1 = new Medium("Da Capo II Dearest Marriage","Sakurai Yoshiyuki", "Circus", "49.00", 30, 0, "Medium");

$produk2 = new Long("Da Capo III R", "Katsuragi Kiyotaka", "Circus", "56.00", 0, 50);

$produk3 = new Long("Da Capo 4", "Sagisawa Arisu", "Circus", "99.00", 0, 50);

// Da Capo II Dearest Marriage | Sakurai Yoshiyuki, Circus (￥. 49,00)
// Da Capo III R | Katsuragi Kiyotaka, Circus (￥. 56,00)
// Da Capo 4 | Sagisawa Arisu, Circus (￥. 99,00) 

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();