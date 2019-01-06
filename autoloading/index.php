<?php

require_once 'App/init.php';
__DIR__

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