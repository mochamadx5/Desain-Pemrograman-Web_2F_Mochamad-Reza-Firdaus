<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan htmlspecialchars</title>
</head>
<body>
    <h2>Form Input Aman</h2>
    <form method="post" action="">
        <label for="input">Masukkan teks:</label>
        <input type="text" name="input" id="input"><br><br>

        <label for="email">Masukkan email:</label>
        <input type="text" name="email" id="email"><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    // Mengecek apakah form sudah dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data input teks
        $input = $_POST['input'];
        // Amankan dari XSS
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "<h3>Hasil:</h3>";
        echo "Anda memasukkan teks: " . $input . "<br>";

        // Ambil data email dan validasi
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        } else {
            echo "Email tidak valid!";
        }
    }
    ?>
</body>
</html>
