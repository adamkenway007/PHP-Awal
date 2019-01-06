<?php
abstract class Produk {
	protected
	       $judul,
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


	abstract public function getInfo();

}

