<?php
session_start();
include '../CRUD/koneksi.php'; // sesuaikan path koneksi kamu

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  if ($username === '' || $password === '') {
    $error = "Username dan Password wajib diisi!";
  } else {
    $query = 'SELECT * FROM "TB_user" WHERE "username" = $1 LIMIT 1;';
    $result = pg_query_params($conn, $query, [$username]);

    if ($result && pg_num_rows($result) > 0) {
      $user = pg_fetch_assoc($result);

      // password bisa hash atau plain
      if (password_verify($password, $user['password']) || $password === $user['password']) {
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | SIAKAD Polinema</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #004E98, #007BFF);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .logo {
      width: 100px;
      margin-bottom: 20px;
    }
    .title {
      font-weight: 600;
      color: #004E98;
    }
    .btn-primary {
      background-color: #004E98;
      border: none;
    }
    .btn-primary:hover {
      background-color: #003b75;
    }
    .footer-text {
      font-size: 0.9rem;
      color: #888;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7 col-sm-9">
        <div class="card p-4 bg-white">
          <div class="text-center">
            <img src="https://api.builder.io/api/v1/image/assets/TEMP/644a6ff082efbd2b3f04624e614fed08c4c55d64?width=140"
                 alt="Logo Polinema" class="logo">
            <h4 class="title mb-4">SIAKAD Politeknik Negeri Malang</h4>
          </div>

          <?php if (!empty($error)): ?>
            <div class="alert alert-danger text-center py-2"><?= htmlspecialchars($error); ?></div>
          <?php endif; ?>

          <form method="POST" action="">
            <div class="mb-3">
              <label for="username" class="form-label">Username / NIM</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Kata Sandi</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" required>
            </div>

            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="showPassword">
              <label class="form-check-label" for="showPassword">Tampilkan Password</label>
            </div>

            <div class="d-grid mb-3">
              <button type="submit" class="btn btn-primary">LOGIN</button>
            </div>

            <div class="text-center">
              <a href="pemulihanPassword.php" class="text-decoration-none">Lupa password?</a>
            </div>
          </form>

          <p class="text-center mt-4 footer-text">2025 © Sistem Informasi Akademik - 3</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS + Password toggle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const togglePassword = document.querySelector('#showPassword');
    const passwordInput = document.querySelector('#password');
    togglePassword.addEventListener('change', function() {
      passwordInput.type = this.checked ? 'text' : 'password';
    });
  </script>
</body>
</html>
