<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
</head>
<body>
    <h2>Keranjang Belanja</h2>

    <?php
    // Cek apakah cookie sudah ada
    $beliNovel = isset($_COOKIE['beliNovel']) ? $_COOKIE['beliNovel'] : 0;
    $beliBuku  = isset($_COOKIE['beliBuku']) ? $_COOKIE['beliBuku'] : 0;

    echo "Jumlah Novel : " . $beliNovel . "<br>";
    echo "Jumlah Buku : " . $beliBuku;
    ?>
</body>
</html>
