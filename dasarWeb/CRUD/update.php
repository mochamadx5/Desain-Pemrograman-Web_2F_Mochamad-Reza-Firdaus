<?php
include 'koneksi.php';

$nim = $_GET['nim'];
$query = pg_query($conn, "SELECT * FROM \"TB_Mahasiswa\" WHERE \"Nim\" = '$nim'");
$data = pg_fetch_assoc($query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];

  $sql = "UPDATE \"TB_Mahasiswa\" 
          SET \"Nama\" = '$nama', \"Email\" = '$email', \"Jurusan\" = '$jurusan'
          WHERE \"Nim\" = '$nim'";
  $result = pg_query($conn, $sql);

  if ($result) {
    header("Location: index.php");
    exit;
  } else {
    echo "Gagal mengubah data: " . pg_last_error($conn);
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Edit Data Mahasiswa</h1>
  <form method="POST">
    <label>NIM (tidak bisa diubah)</label>
    <input type="text" value="<?= htmlspecialchars($data['Nim']); ?>" readonly>
    <label>Nama</label>
    <input type="text" name="nama" value="<?= htmlspecialchars($data['Nama']); ?>" required>
    <label>Email</label>
    <input type="email" name="email" value="<?= htmlspecialchars($data['Email']); ?>" required>
    <label>Jurusan</label>
    <input type="text" name="jurusan" value="<?= htmlspecialchars($data['Jurusan']); ?>" required>
    <button type="submit" class="btn">Update</button>
  </form>
  <a href="index.php" class="back-btn">← Kembali</a>
</body>
</html>
<?php pg_close($conn); ?>
