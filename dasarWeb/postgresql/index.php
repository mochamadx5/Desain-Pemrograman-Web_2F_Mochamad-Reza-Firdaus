<?php
// --- KONFIGURASI KONEKSI POSTGRESQL ---
$host = 'localhost';
$port = '5432';
$dbname = 'phpdatabase';
$user = 'postgres';
$pass = '1234';

// Membuat koneksi
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die('Koneksi gagal: ' . pg_last_error());
}

pg_set_client_encoding($conn, 'UTF8');

// Ambil data dari tabel mahasiswa
$sql = "SELECT
  \"NIM\" AS \"NIM\",
  \"Nama\" AS \"Nama\",
  \"Email\" AS \"Email\",
  \"Jurusan\" AS \"Jurusan\"
FROM \"TB_mahasiswa\"
ORDER BY \"NIM\";";

$result = pg_query($conn, $sql);
if (!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database Mahasiswa | SIAKAD Polinema</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <table>
    <tr>
      <th>No.</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i=1; ?>
    <?php while ($row = pg_fetch_assoc($result)): ?>
      <tr>
        <td><?= $i; ?></td>
        <td><?= htmlspecialchars($row["NIM"], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($row["Nama"], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($row["Email"], ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?= htmlspecialchars($row["Jurusan"], ENT_QUOTES, 'UTF-8'); ?></td>
        <td class="aksi">
          <a href="#">Edit</a> |
          <a href="#" class="hapus">Hapus</a>
        </td>
      </tr>
    <?php $i++; endwhile; ?>
  </table>

  <a href="../UTS/beranda.html" class="back-btn">← Kembali ke Beranda</a>
</body>
</html>
<?php
pg_free_result($result);
pg_close($conn);
?>
