<?php
$nilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$total = 0;
foreach ($nilaiSiswa as $siswa) {
    $total += $siswa[1];
}
$rataRata = $total / count($nilaiSiswa);

echo "Rata rata kelas : $rataRata <br>";
echo "daftar siswa dengan nilai di atas rata-rata : <br>";

foreach ($nilaiSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "nama : {$siswa[0]}, nilai : {$siswa[1]} <br>";
    }
}
?>