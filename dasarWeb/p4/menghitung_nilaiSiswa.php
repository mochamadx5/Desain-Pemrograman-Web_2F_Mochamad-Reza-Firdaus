<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$max1 = $nilaiSiswa[0];
$max2 = $nilaiSiswa[0];

// Temukan 2 nilai tertinggi
for ($i=0; $i < count($nilaiSiswa); $i++) { 
    if ($nilaiSiswa[$i > $max1]) {
        $max2 = $max1;
        $max1 = $nilaiSiswa[$i];
    } elseif ($nilaiSiswa[$i] > $max2 && $nilaiSiswa[$i] != $max1) {
        $max2 = $nilaiSiswa[$i];
    }
}
// Temukan 2 nilai terendah
$min1 = $nilaiSiswa[0];
$min2 = $nilaiSiswa[0];
for ($i = 0; $i < count($nilaiSiswa); $i++) {
    if ($nilaiSiswa[$i] < $min1) {
        $min2 = $min1;
        $min1 = $nilaiSiswa[$i];
    } elseif ($nilaiSiswa[$i] < $min2 && $nilaiSiswa[$i] != $min1) {
        $min2 = $nilaiSiswa[$i];
    }
}
// Hitung total nilai, abaikan 2 tertinggi & 2 terendah
$totalNilai = 0;
for ($i = 0; $i < count($nilaiSiswa); $i++) {
    if ($nilaiSiswa[$i] != $max1 && $nilaiSiswa[$i] != $max2 && $nilaiSiswa[$i] != $min1 && $nilaiSiswa[$i] != $min2) {
        $totalNilai += $nilaiSiswa[$i];
    }
}

echo "Total nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: $totalNilai";
?>