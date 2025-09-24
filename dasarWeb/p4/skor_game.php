<?php
$totalSkor = 400;
$totalSkor2 = 525;

$hadiahTambahan = ($totalSkor > 500) ? "YA " : "TIDAK";
echo "total skor pemain 1 adalah : $totalSkor <br>";

echo "apakah pemain 1 mendapatkan hadiah tambahan? $hadiahTambahan <br>";


$hadiahTambahan = ($totalSkor2 > 500) ? "YA " : "TIDAK";
echo "total skor pemain 2 adalah : $totalSkor2 <br>";

echo "apakah pemain 2 mendapatkan hadiah tambahan? $hadiahTambahan";

?>