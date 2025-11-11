<?php
session_start();
include '../CRUD/koneksi.php'; // sesuaikan path koneksi kamu

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  // validasi input kosong
  if ($username === '' || $password === '') {
    $error = "Username dan Password wajib diisi!";
  } else {
    // cek user di database
    $query = 'SELECT * FROM "TB_user" WHERE "username" = $1 LIMIT 1;';
    $result = pg_query_params($conn, $query, [$username]);

    if ($result && pg_num_rows($result) > 0) {
      $user = pg_fetch_assoc($result);

      // verifikasi password hash (kalau disimpan hashed)
      if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama'] = $user['nama'];
        header('Location: beranda.php');
        exit;
      }
      // kalau password disimpan polos (plain text)
      elseif ($password === $user['password']) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama'] = $user['nama'];
        header('Location: beranda.php');
        exit;
      } else {
        $error = "Password salah!";
      }
    } else {
      $error = "User tidak ditemukan!";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIAKAD | Politeknik Negeri Malang</title>
  <link rel="stylesheet" href="loginPage.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="login-page">
    <h1 class="title">SIAKAD | Politeknik Negeri Malang</h1>

    <div class="login-container">
      <div class="left-content">
        <div class="logo-section">
          <img src="https://api.builder.io/api/v1/image/assets/TEMP/644a6ff082efbd2b3f04624e614fed08c4c55d64?width=140"
               alt="Logo Polinema" class="logo">
        </div>

        <form class="login-form" method="POST" action="">
          <h2>Login Mahasiswa</h2>

          <?php if (!empty($error)): ?>
            <p style="color:red; text-align:center;"><?= htmlspecialchars($error); ?></p>
          <?php endif; ?>

          <div class="form-group">
            <label for="username">Username - NIM</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
          </div>

          <div class="show-password">
            <input type="checkbox" id="showPassword">
            <label for="showPassword">Tampilkan Password</label>
          </div>

          <div class="login-footer">
            <button type="submit" class="btn-login">LOGIN</button>
            <a href="pemulihanPassword.php" class="forgot-password">Lupa password?</a>
          </div>
          <p class="footer-text">2025 © Sistem Informasi Akademik - 3</p>
        </form>
      </div>

      <div class="right-content">
        <img src="https://api.builder.io/api/v1/image/assets/TEMP/52a8f7f0e127a4d17c388876c1b078216e4abde2?width=1346"
             alt="Gedung Polinema" class="building">
      </div>
    </div>
  </div>

  <script>
    // tampilkan / sembunyikan password
    const togglePassword = document.querySelector('#showPassword');
    const passwordInput = document.querySelector('#password');
    togglePassword.addEventListener('change', function() {
      passwordInput.type = this.checked ? 'text' : 'password';
    });
  </script>
</body>
</html>
