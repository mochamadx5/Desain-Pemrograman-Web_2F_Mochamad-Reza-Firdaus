<?php
include 'koneksi.php';

$sql = 'SELECT * FROM "TB_Mahasiswa" ORDER BY "Nim"';
$result = pg_query($conn, $sql);
if (!$result) {
    die("Query gagal: " . pg_last_error($conn));
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa | Admin SIAKAD</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>📋 Data Mahasiswa</h1>

  <a href="create.php" class="btn">+ Tambah Mahasiswa</a>
  <table>
    <tr>
      <th>No.</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; while ($row = pg_fetch_assoc($result)): ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><?= htmlspecialchars($row['Nim']); ?></td>
      <td><?= htmlspecialchars($row['Nama']); ?></td>
      <td><?= htmlspecialchars($row['Email']); ?></td>
      <td><?= htmlspecialchars($row['Jurusan']); ?></td>
      <td>
        <a href="update.php?nim=<?= urlencode($row['Nim']); ?>">Edit</a> |
        <a href="delete.php?nim=<?= urlencode($row['Nim']); ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>

  <a href="../UTS/beranda.php" class="back-btn">← Kembali ke Beranda</a>
</body>
</html>
<?php pg_close($conn); ?>
