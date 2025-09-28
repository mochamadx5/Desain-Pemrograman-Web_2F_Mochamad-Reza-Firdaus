<?php

function perkenalan($nama, $salam) {
    echo $salam. "," ;
    echo "Perkenalkan, nama saya". $nama.  "<br/>";
    echo "Senang berkenalan dengan anda <br/>";
}
// memanggil fungsi yang sudah dibuat
perkenalan(" hamdana", "hallo");

echo "<hr>";

$saya = " elok";
$ucapanSalam = "Selamat pagi";

// memanggil lagi
perkenalan($saya, $ucapanSalam);
?>