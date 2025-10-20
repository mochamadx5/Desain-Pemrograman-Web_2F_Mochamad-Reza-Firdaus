<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'];

    // Cek apakah checkbox warna dipilih
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }

    // Cek apakah radio button jenis kelamin dipilih
    if (isset($_POST['jenis_kelamin'])) {
        $selectedJenisKelamin = $_POST['jenis_kelamin'];
    } else {
        $selectedJenisKelamin = "Tidak dipilih";
    }

    echo "Anda memilih buah: " . $selectedBuah . "<br>";

    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
?>