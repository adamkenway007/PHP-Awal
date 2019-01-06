<?php
	// require_once 'Produk/InfoProduk.php';
	// require_once 'Produk/Produk.php';
	// require_once 'Produk/Long.php';
	// require_once 'Produk/Medium.php';
	// require_once 'Produk/CetakInfoProduk.php';

    // Bisa pakai
	// require_once __DIR__ 'Produk/' . $class . '.php';

spl_autoload_register(function ( $class ) {
	require_once 'Produk/' . $class . '.php';
});