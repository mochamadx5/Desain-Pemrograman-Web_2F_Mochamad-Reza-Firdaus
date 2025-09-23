<?php
$a = 10;
$b = 5;
$c = $a +5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "variabel a: {$a} <br>";
echo "variabel b: {$b} <br>";
echo "variabel c: {$c} <br>";
echo "variabel d: {$d} <br>";
echo "variabel e: {$e} <br>";

var_dump($e);

echo "<br>";

$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<br>";

$namaDepan = "Ibnu";
$namaBelakang = "Jakaria";

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . '' .  $namaBelakang;

echo "Nama depan : {$namaDepan} <br>";
echo 'Nama Belakang : ' . $namaBelakang . '<br>';

$listMhs = ["Wahid Abdullah", "Muhammad Rian", "Lendis Ayu"];
echo $listMhs[0];
?>