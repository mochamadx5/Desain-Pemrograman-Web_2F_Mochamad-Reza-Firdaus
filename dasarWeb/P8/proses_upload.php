<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";

// periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}
if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    // loop semua file yang diunngah
    for ($i=0; $i < $totalFiles ; $i++) { 
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah. <br>";
        } else {
            echo "gagal menunggah file $fileName. <br>";
        }
    }
    }
    // pindahkan file yang diunggah ke direktori penyimpanan
    else {
        echo "tidak ada file yang diunggah.";
}