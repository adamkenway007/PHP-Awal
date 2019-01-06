<?php


// Jualan Produk
// Game Legacy
// Game New
abstract class Produk {
	private$judul,
	       $pemainUtama, 
	       $penerbit,
	       $harga,
	       $diskon = 0;


	public function __construct( $judul = "judul", $pemainUtama = "pemainUtama", $penerbit = "penerbit", $harga = 0 ) {
		$this->judul       = $judul;
		$this->pemainUtama = $pemainUtama;
		$this->penerbit    = $penerbit;
		$this->harga       = $harga;

	}

	public function setJudul( $judul ) {
		if( !is_string($judul)) {
			throw new Exception("judul harus string");
		}
		$this->judul = $judul;
	}

	public function getJudul() {
		return $this->judul;
	}

	public function setpemainUtama( $pemainUtama ) {
		$this->pemainUtama = $pemainUtama;
	}

	public function getpemainUtama() {
		return $this->pemainUtama;
	}

	public function setPenerbit( $penerbit ) {
		$this->penerbit = $penerbit;
	}

	public function getPenerbit() {
		return $this->penerbit;
	}

	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	
	}

	public function getDiskon() {
		return $this->diskon;
	}

	public function setHarga( $harga) {
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon / 100 );
	}


	public function getLabel() {
		return "$this->pemainUtama, $this->penerbit";
		// $this-> untuk memanggil variabel scope lain & untuk mengambil isi dari property di dalam class yang bersangkutan
	}

	abstract public function getInfoProduk();


	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (￥. {$this->harga})";

		return $str;
	}

}

class Medium extends Produk {
	public $timeSpendM;

	public function __construct( $judul = "judul", $pemainUtama = "pemainUtama", $penerbit = "penerbit", $harga = 0 ,$timeSpendM = 0){
		parent::__construct( $judul, $pemainUtama, $penerbit, $harga );
		$this->timeSpendM = $timeSpendM;
	}


	public function getInfoProduk() {
	$str = "Medium : " . $this->getInfo() . " ~ {$this->timeSpendM} Hours.";
	return $str;
  }
}

class Long extends Produk {
	public $timeSpendM;

	public function __construct( $judul = "judul", $pemainUtama = "pemainUtama", $penerbit = "penerbit", $harga = 0 ,$timeSpendL = 0){
		parent::__construct( $judul, $pemainUtama, $penerbit, $harga );
		$this->timeSpendL = $timeSpendL;
	}

	public function getInfoProduk() {
	$str = "Long : " . $this->getInfo() . " ~ {$this->timeSpendL} Hours.";
	return $str;
  }
}

class CetakInfoProduk {
	public $daftarProduk = [];

	public function tambahProduk ( Produk $produk) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
		$str = "Daftar Produk : <br>";

		foreach ($this->daftarProduk as $p ) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}
		return $str;
	}
}

$produk1 = new Medium("Da Capo II Dearest Marriage","Sakurai Yoshiyuki", "Circus", 4900, 30);

$produk2 = new Long("Da Capo III R", "Katsuragi Kiyotaka", "Circus", 5600, 50);

$produk3 = new Long("Da Capo 4", "Sagisawa Arisu", "Circus", 9900, 50);

// Da Capo II Dearest Marriage | Sakurai Yoshiyuki, Circus (￥. 49,00)
// Da Capo III R | Katsuragi Kiyotaka, Circus (￥. 56,00)
// Da Capo 4 | Sagisawa Arisu, Circus (￥. 99,00) 

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);
echo $cetakProduk->cetak();