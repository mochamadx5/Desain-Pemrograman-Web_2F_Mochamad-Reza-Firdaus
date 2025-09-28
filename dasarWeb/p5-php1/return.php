<?php
//membuat fungsi
function hitungUmur($thn_lahir, $thn_skrg) {
    $umur = $thn_skrg - $thn_lahir;
    return $umur;
}
echo "Umur saya adalah ". hitungUmur(1998, 2023) . " tahun";
?>