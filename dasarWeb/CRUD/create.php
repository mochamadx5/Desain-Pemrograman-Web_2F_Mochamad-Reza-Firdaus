<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];

  $sql = "INSERT INTO \"TB_mahasiswa\" (\"NIM\", \"Nama\", \"Email\", \"Jurusan\")
          VALUES ('$nim', '$nama', '$email', '$jurusan')";
  $result = pg_query($conn, $sql);

  if ($result) {
    header("Location: index.php");
    exit;
  } else {
    echo "Gagal menambah data: " . pg_last_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Tambah Mahasiswa</h1>
  <form method="POST">
    <label>NIM</label>
    <input type="text" name="nim" required>
    <label>Nama</label>
    <input type="text" name="nama" required>
    <label>Email</label>
    <input type="email" name="email" required>
    <label>Jurusan</label>
    <input type="text" name="jurusan" required>
    <button type="submit" class="btn">Simpan</button>
  </form>
  <a href="index.php" class="back-btn">← Kembali</a>
</body>
</html>
