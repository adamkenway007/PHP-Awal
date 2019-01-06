<?php
// array
// variabel yang dapat dimiliki banyak nilai
// element pad array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat aray
// Cara lama
$hari =  array("Senin", "Selasa", "Rabu" );
// Cara baru
$bulan = ["Januari","Februari", "Maret", "April"];
$arr1 = [123 ,"tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// Menampilkan 1 elemen pada array
echo "<br>";
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";
// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
$hari[] = "Sabtu";
echo "<br>";
var_dump($hari);
?>