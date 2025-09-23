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

?>