<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | SIAKAD Polinema</title>
  
  <!-- Font & Bootstrap -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }
    .navbar-brand img {
      height: 50px;
    }
    .profil-box {
      background-color: #0d6efd;
      color: white;
      border-radius: 10px;
      padding: 15px 25px;
      display: inline-block;
    }
    .info-card {
      border: 1px solid #dee2e6;
      border-radius: 10px;
      background-color: white;
      padding: 20px;
      text-align: center;
      transition: all 0.2s;
    }
    .info-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .footer {
      background-color: #0d6efd;
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="beranda.html">
        <img src="https://api.builder.io/api/v1/image/assets/TEMP/644a6ff082efbd2b3f04624e614fed08c4c55d64?width=140" alt="Logo Polinema">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Message</a></li>
          <li class="nav-item"><a class="nav-link" href="#">General</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Akademik</a></li>
          <li class="nav-item"><a class="nav-link" href="#">UKT</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Surat & Kuisioner</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Tingkat Akhir</a></li>
          <li class="nav-item"><a class="nav-link" href="../postgresql/index.php">Profil Mahasiswa</a></li>
        </ul>
        <a href="loginPage.html" class="btn btn-danger ms-lg-3">Logout</a>
      </div>
    </div>
  </nav>

  <!-- Profil Mahasiswa -->
  <section class="container my-4 text-center">
    <div class="profil-box mx-auto">
      <h5 class="mb-1">244107020104 / Mochamad Reza Firdaus</h5>
      <p class="mb-0">D-IV Teknik Informatika</p>
    </div>
  </section>

  <!-- Welcome Section -->
  <section class="container text-center mb-5">
    <h1 class="fw-bold mb-3">Selamat Datang di SIAKAD Politeknik Negeri Malang</h1>
    <p class="text-muted">Akses cepat ke informasi akademik, nilai, jadwal kuliah, dan layanan mahasiswa.</p>
  </section>

  <!-- Info Grid -->
  <section class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="info-card">
          <h4>Jadwal Kuliah</h4>
          <p>Lihat jadwal terbaru untuk semester aktif.</p>
          <button class="btn btn-primary">Lihat Jadwal</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-card">
          <h4>Kartu Rencana Studi (KRS)</h4>
          <p>Isi dan perbarui KRS secara online.</p>
          <button class="btn btn-primary">Isi KRS</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-card">
          <h4>LMS</h4>
          <p>Learning Management System.</p>
          <button class="btn btn-primary">LMS</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer mt-5">
    <p class="mb-0">© 2025 Sistem Informasi Akademik - Politeknik Negeri Malang</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
