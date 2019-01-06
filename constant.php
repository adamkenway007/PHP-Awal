<?php

// Cara 1 = variable global
// define('NAMA', 'Adam Backtiar Azhari');  // Tulis 'value' constant dengan huruf besar 

// echo NAMA;

// echo "<br>";
// Cara 2 = untuk oop karena bisa di masukkan di dalam class
// const UMUR = 19;
// echo UMUR;

// class Coba {
// 	// define('NAMA', 'Adam Backtiar Azhari');
// 	const NAMA = 'Adam Backtiar Azhari';
// }
//echo Coba(); // Salah
// echo Coba::NAMA;
echo __FILE__;
echo"<br>";
echo __LINE__;
echo"<br>";
echo __DIR__;
echo"<br>";

function coba() {
 return __FUNCTION__;	
}
echo coba();

echo"<br>";

class coba2 {
	public $kelas = __CLASS__;
}

$obj = new coba2;
echo $obj->kelas;

?>
