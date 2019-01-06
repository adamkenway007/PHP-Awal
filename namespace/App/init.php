<?php
	// require_once 'Produk/InfoProduk.php';
	// require_once 'Produk/Produk.php';
	// require_once 'Produk/Long.php';
	// require_once 'Produk/Medium.php';
	// require_once 'Produk/CetakInfoProduk.php';
	// require_once 'Produk/User.php';

	// require_once 'Service/User.php';	//---------------------------------------------------
    // Bisa pakai
	// require_once __DIR__ . '/Produk/' . $class . '.php';

spl_autoload_register(function ( $class ) {
	// App\Service\User = ["App", "Service", "User"]
	$class = explode('\\', $class);
	$class = end($class); // end = untuk mengambil element terakhir dari array
	require_once __DIR__ . '/Service/' . $class . '.php';
});

spl_autoload_register(function ( $class ) {
	// App\Produk\User = ["App", "Produk", "User"]
	$class = explode('\\', $class);
	$class = end($class); // end = untuk mengambil element terakhir dari array
	require_once __DIR__ . '/Produk/' . $class . '.php';
});