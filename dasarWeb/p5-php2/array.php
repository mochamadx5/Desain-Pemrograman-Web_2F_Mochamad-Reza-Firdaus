<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        color: blue;
        font-family : "consolas";
    }
</style>
<body>
    <?php
    $Dosen = [
        'nama' => 'elok nur hamdana',
        'domisili' => 'Malang',
        'jenis kelamin' => 'Perempuan'];
    echo "Nama :  {$Dosen ['nama']} <br>";
    echo "Domisili : {$Dosen ['domisili']} <br>";
    echo "Jenis kelamin : {$Dosen ['jenis kelamin']} <br>";
    ?>
</body>
</html>