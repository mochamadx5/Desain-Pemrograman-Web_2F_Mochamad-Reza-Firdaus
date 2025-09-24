<?php
$hargaProduk = 120000;
$diskon = 0;

if ($hargaProduk > 100000) {
    $diskon = 20;
}

$jumlahDiskon = ($hargaProduk * $diskon) / 100;

$hargaBayar = $hargaProduk - $jumlahDiskon;

echo "harga produk sebelum diskon : Rp $hargaProduk <br>";
echo "Diskon : $diskon% = Rp $jumlahDiskon <br>";
echo "harga yang harus dibayar : Rp $hargaBayar";
?>