<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Dosen = [
        'nama' => 'elok nur hamdana',
        'domisili' => 'Malang',
        'jenis kelamin' => 'Perempuan'];
    foreach ($Dosen as $key => $value) {
          echo $key . " : " . $value . "<br>";
    }
    ?>
</body>
</html>