<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus [] = $nilai;
    }
}
echo "daftar nilai siswa yang lulus : " . implode(',' , $nilaiLulus);

$daftarKaryawan = [
    ['alice', 7],
    ['bob', 3],
    ['charlie',9],
    ['david', 5],
    ['eva', 6],
];

$karyawanPengalamanLimaTahun = [];
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "<br> daftar karyawan dengan pengalaman kerja lebih dari 5 tahun : " . implode(',', $karyawanPengalamanLimaTahun);

$daftarNilai = [
    'matematika' => [
        ['alice', 85],
        ['bob', 92],
        ['charlie', 78],
    ],
    'fisika' => [
        ['alice', 90],
        ['bob', 88],
        ['charlie', 75],
    ],
    'kimia' => [
        ['alice', 92],
        ['bob', 80],
        ['charlie',85],
    ],
];

$mataKuliah = 'fisika';

echo "<br> <br> daftar nilai mahasiswa dalam mata kuliah $mataKuliah : <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama : {$nilai[0]}, Nilai : {$nilai[1]} <br>";
}
?>