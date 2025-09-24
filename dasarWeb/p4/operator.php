<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: $hasilTambah <br>";
echo "Hasil Kurang: $hasilKurang <br>";
echo "Hasil Kali: $hasilKali <br>";
echo "Hasil Bagi: $hasilBagi <br>";
echo "Sisa Bagi (modulus): $sisaBagi <br>";
echo "Pangkat: $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a sama dengan b? ";
var_dump($hasilSama);
echo "<br>";

echo "Apakah a tidak sama dengan b? ";
var_dump($hasilTidakSama);
echo "<br>";

echo "Apakah a lebih kecil dari b? ";
var_dump($hasilLebihKecil);
echo "<br>";

echo "Apakah a lebih besar dari b? ";
var_dump($hasilLebihBesar);
echo "<br>";

echo "Apakah a lebih kecil atau sama dengan b? ";
var_dump($hasilLebihKecilSama);
echo "<br>";

echo "Apakah a lebih besar atau sama dengan b? ";
var_dump($hasilLebihBesarSama);
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND: ";
var_dump($hasilAnd);
echo "<br>";

echo "Hasil OR: ";
var_dump($hasilOr);
echo "<br>";

echo "Hasil NOT A: ";
var_dump($hasilNotA);
echo "<br>";

echo "Hasil NOT B: ";
var_dump($hasilNotB);
echo "<br>";


$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$a += $b;
echo "Setelah a += b: ";
var_dump($a);
echo "<br>";

$a -= $b;
echo "Setelah a -= b: ";
var_dump($a);
echo "<br>";

$a *= $b;
echo "Setelah a *= b: ";
var_dump($a);
echo "<br>";

$a /= $b;
echo "Setelah a /= b: ";
var_dump($a);
echo "<br>";

$a %= $b;
echo "Setelah a %= b: ";
var_dump($a);
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil identik ";
var_dump($hasilIdentik);
echo "<br>";

echo "Hasil tidak identik ";
var_dump($hasilTidakIdentik);
echo "<br>";
?>