<?php
class Long extends Produk implements InfoProduk {
	public $timeSpendM;

	public function __construct( $judul = "judul", $pemainUtama = "pemainUtama", $penerbit = "penerbit", $harga = 0 ,$timeSpendL = 0){
		parent::__construct( $judul, $pemainUtama, $penerbit, $harga );
		$this->timeSpendL = $timeSpendL;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (￥. {$this->harga})";

		return $str;
	}

	public function getInfoProduk() {
	$str = "Long : " . $this->getInfo() . " ~ {$this->timeSpendL} Hours.";
	return $str;
  }
}