<?php
include 'koneksi.php';
$nim = $_GET['nim'];
$sql = "DELETE FROM \"TB_Mahasiswa\" WHERE \"Nim\" = '$nim'";
$result = pg_query($conn, $sql);

if ($result) {
  header("Location: index.php");
  exit;
} else {
  echo "Gagal menghapus data: " . pg_last_error($conn);
}
pg_close($conn);
?>
