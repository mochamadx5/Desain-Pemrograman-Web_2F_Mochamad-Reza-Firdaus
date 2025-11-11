<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pemulihan Password | SIAKAD Polinema</title>

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
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    .logo {
      width: 100px;
      display: block;
      margin: 0 auto 10px;
    }
    .title {
      color: #004E98;
      font-weight: 600;
      text-align: center;
      margin-bottom: 30px;
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
      color: #666;
      margin-top: 20px;
      text-align: center;
    }
    .right-img {
      object-fit: cover;
      width: 100%;
      height: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center align-items-center g-4">
      <!-- Kolom Kiri -->
      <div class="col-lg-5 col-md-7">
        <div class="card p-4 bg-white">
          <img src="https://api.builder.io/api/v1/image/assets/TEMP/644a6ff082efbd2b3f04624e614fed08c4c55d64?width=140" alt="Logo Polinema" class="logo">
          <h4 class="title">Pemulihan Password</h4>

          <form id="recoveryForm">
            <div class="mb-3">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" id="nim" class="form-control" placeholder="Masukkan NIM" required>
            </div>

            <div class="mb-3">
              <label for="tgl" class="form-label">Tanggal Lahir</label>
              <input type="date" id="tgl" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email Pemulihan</label>
              <input type="email" id="email" class="form-control" placeholder="Masukkan email pemulihan" required>
            </div>

            <div class="d-grid mb-3">
              <button type="button" id="btn-proses" class="btn btn-primary">PROSES</button>
            </div>

            <p class="text-center">
              klik <a href="loginPage.php" class="text-decoration-none text-primary">disini</a> untuk kembali ke Halaman Login
            </p>

            <p class="footer-text">2025 © Sistem Informasi Akademik - 3</p>
          </form>
        </div>
      </div>

      <!-- Kolom Kanan -->
      <div class="col-lg-5 d-none d-lg-block">
        <!-- <img src="https://api.builder.io/api/v1/image/assets/TEMP/52a8f7f0e127a4d17c388876c1b078216e4abde2?width=1346" -->
             <!-- alt="Gedung Polinema" class="right-img rounded-4 shadow"> -->
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('btn-proses').addEventListener('click', function() {
      const nim = document.getElementById('nim').value.trim();
      const tgl = document.getElementById('tgl').value.trim();
      const email = document.getElementById('email').value.trim();

      if (!nim || !tgl || !email) {
        alert('Semua field wajib diisi!');
        return;
      }

      // contoh simulasi proses pemulihan
      alert('Permintaan pemulihan dikirim untuk NIM: ' + nim);
      // di implementasi nyata, kirim data ke server (AJAX / PHP)
    });
  </script>
</body>
</html>
