<?php
class Medium extends Produk implements InfoProduk {
	public $timeSpendM;

	public function __construct( $judul = "judul", $pemainUtama = "pemainUtama", $penerbit = "penerbit", $harga = 0 ,$timeSpendM = 0){
		parent::__construct( $judul, $pemainUtama, $penerbit, $harga );
		$this->timeSpendM = $timeSpendM;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (￥. {$this->harga})";

		return $str;
	}

	public function getInfoProduk() {
	$str = "Medium : " . $this->getInfo() . " ~ {$this->timeSpendM} Hours.";
	return $str;
  }

}