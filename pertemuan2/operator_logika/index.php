<?php
// Operator Logika / Conditional
// && : Operator And = Syarat Harus Kedua Value Benar
// || : Operator OR  = Syarat Harus Salah Satu Value Benar Pengecekan Pada Akhiran
// !  : Operator NOT
echo "<h4>x = 30</h4>";
echo "<h4>var_dump(x < 20 && x % 2 == 0)</h4>";
$x = 30;
var_dump($x < 20 && $x % 2 == 0);
echo '<br />';
echo '-----------------------------------';
echo '<br />';
echo "<h4>x = 30</h4>";
echo "<h4>var_dump(x < 20 || x % 2 == 0)</h4>";
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>