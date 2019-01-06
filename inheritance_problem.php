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
	       $timeSpendL,
	       $tipe;

	public function __construct( $judul = "judul", $pemainUtama = "pemainUtama", $penerbit = "penerbit", $harga = 0, $timeSpendM = 0, $timeSpendL = 0, $tipe ) {
		$this->judul       = $judul;
		$this->pemainUtama = $pemainUtama;
		$this->penerbit    = $penerbit;
		$this->harga       = $harga;
		$this->timeSpendM  = $timeSpendM;
		$this->timeSpendL  = $timeSpendL;
		$this->tipe 	   = $tipe;
	}

	public function getLabel() {
		return "$this->pemainUtama, $this->penerbit";
		// $this-> untuk memanggil variabel scope lain & untuk mengambil isi dari property di dalam class yang bersangkutan
	}

	public function getInfoLengkap() {
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (￥. {$this->harga})";
		if( $this->tipe == "Medium" ) {
			$str .= " ~ {$this->timeSpendM} Hours.";
		} else if( $this->tipe == "Long" ) {
			$str .= " ~ {$this->timeSpendL} Hours.";
		}

		return $str;
	}

}

class CetakInfoProduk {
	public function cetak( Produk $produk) {
		$str = "{$produk->judul} | {$produk->getLabel()} (￥.{$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Da Capo II Dearest Marriage","Sakurai Yoshiyuki", "Circus", "49.00", 30, 0, "Medium");

$produk2 = new Produk("Da Capo III R", "Katsuragi Kiyotaka", "Circus", "56.00", 0, 50, "Long");

$produk3 = new Produk("Da Capo 4", "Sagisawa Arisu", "Circus", "99.00", 0, 50, "Long");

// Da Capo II Dearest Marriage | Sakurai Yoshiyuki, Circus (￥. 49,00)
// Da Capo III R | Katsuragi Kiyotaka, Circus (￥. 56,00)
// Da Capo 4 | Sagisawa Arisu, Circus (￥. 99,00) 

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();