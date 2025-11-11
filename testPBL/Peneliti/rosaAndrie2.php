<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Peneliti - IVSS Lab</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-sky-50 text-gray-900">

  <!-- Bagian Profil -->
  <section class="bg-white w-full shadow-md border-b border-gray-200 py-12 px-6 text-center">
    <h1 class="text-3xl font-bold tracking-wide text-sky-700 mb-10">Profil Peneliti</h1>

    <!-- Frame Profil -->
    <div class="bg-white max-w-5xl mx-auto flex flex-col md:flex-row items-center md:items-start gap-10 p-8">

      <!-- Foto -->
      <div class="flex-shrink-0 flex flex-col items-center md:items-start">
        <img src="../Anggota_Lab/Rosa_Andrie_Asmara.jpg" alt="Rosa Andrie Asmara"
          class="w-48 h-48 rounded-full border-4 border-sky-300 shadow-md object-cover mb-4">
      </div>

      <!-- Nama + Biodata -->
      <div class="flex-1 w-full space-y-4 text-left">
        <h2 class="text-2xl font-semibold leading-snug text-gray-800">
          Prof. Dr. Eng. Rosa Andrie Asmara, ST., MT.
        </h2>

        <div class="space-y-2 text-sm">
          <div class="flex justify-between border-b border-gray-300 pb-1">
            <span class="font-semibold text-gray-700">NIP</span>
            <span>198010102005011001</span>
          </div>
          <div class="flex justify-between border-b border-gray-300 pb-1">
            <span class="font-semibold text-gray-700">NIDN</span>
            <span>0010108003</span>
          </div>
          <div class="flex justify-between border-b border-gray-300 pb-1">
            <span class="font-semibold text-gray-700">Program Studi</span>
            <span>Teknik Informatika</span>
          </div>
          <div class="flex justify-between border-b border-gray-300 pb-1">
            <span class="font-semibold text-gray-700">Jabatan</span>
            <span>Tenaga Pengajar</span>
          </div>
          <div class="flex justify-between">
            <span class="font-semibold text-gray-700">Email</span>
            <span class="text-[13px] text-gray-600">rosa.andrie@polinema.ac.id</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pendidikan & Sertifikasi -->
  <section class="py-12 px-6 flex flex-col md:flex-row gap-10 justify-center items-start max-w-6xl mx-auto">
    <!-- Pendidikan -->
    <div class="flex-1 bg-white rounded-2xl shadow-md border border-gray-200 p-8">
      <h3 class="text-2xl font-semibold mb-4 text-sky-700">Pendidikan</h3>
      <ul class="list-disc list-inside text-base text-gray-800 space-y-3 leading-relaxed">
        <li><strong>Profesi Insinyur</strong> — Universitas Brawijaya (2023)</li>
        <li><strong>S3 Doctor of Engineering</strong> — Saga University (2013)</li>
        <li><strong>S2 Magister Teknik</strong> — Institut Teknologi Sepuluh Nopember (2009)</li>
        <li><strong>S1 Sarjana Teknik</strong> — Universitas Brawijaya (2004)</li>
      </ul>
    </div>

    <!-- Sertifikasi -->
    <div class="flex-1 bg-white rounded-2xl shadow-md border border-gray-200 p-8">
      <h3 class="text-2xl font-semibold mb-4 text-sky-700">Sertifikasi</h3>
      <ul class="list-disc list-inside text-base text-gray-800 space-y-3 leading-relaxed">
        <li>Sertifikasi Dosen Profesional (2020)</li>
        <li>Certified Lecturer of Artificial Intelligence (2021)</li>
        <li>Pelatihan Metodologi Pembelajaran Digital (2022)</li>
      </ul>
    </div>
  </section>

  <!-- Riset dan Penelitian -->
  <section class="py-10 px-8 bg-sky-50 max-w-7xl mx-auto">
    <h2 class="text-4xl font-bold text-gray-800 mb-6 text-center">Riset dan Penelitian</h2>

    <!-- Filter -->
    <div class="flex justify-center gap-6 mb-8">
      <button class="px-6 py-2 bg-sky-700 text-white font-semibold rounded-xl shadow hover:bg-sky-800 transition">Most Cited</button>
      <button class="px-6 py-2 border border-gray-400 text-gray-700 rounded-xl font-semibold hover:bg-gray-100 transition">Latest</button>
      <button class="px-6 py-2 border border-gray-400 text-gray-700 rounded-xl font-semibold hover:bg-gray-100 transition">Oldest</button>
    </div>

    <!-- Grid Kartu Penelitian -->
    <div class="grid md:grid-cols-3 gap-8 items-stretch">
      <!-- Card 1 -->
      <div class="bg-white rounded-2xl shadow-md p-8 flex flex-col justify-between hover:shadow-lg transition-all duration-300">
        <div>
          <h3 class="text-lg font-semibold text-sky-800 mb-3 leading-snug">
            Comparison of Viola-Jones Haar Cascade Classifier and Histogram of Oriented Gradients (HOG) for Face Detection
          </h3>
          <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-gray-900">2020</span>
            <span class="text-gray-600 text-sm">145 citations</span>
          </div>
        </div>
        <a href="#" class="mt-5 w-full text-center border border-sky-800 py-2 rounded-lg text-sky-700 font-semibold hover:bg-sky-800 hover:text-white transition">
          BACA
        </a>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-2xl shadow-md p-8 flex flex-col justify-between hover:shadow-lg transition-all duration-300">
        <div>
          <h3 class="text-lg font-semibold text-sky-800 mb-3 leading-snug">
            Study of Hoax News Detection using Naïve Bayes Classifier in Indonesian Language
          </h3>
          <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-gray-900">2017</span>
            <span class="text-gray-600 text-sm">111 citations</span>
          </div>
        </div>
        <a href="#" class="mt-5 w-full text-center border border-sky-800 py-2 rounded-lg text-sky-700 font-semibold hover:bg-sky-800 hover:text-white transition">
          BACA
        </a>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-2xl shadow-md p-8 flex flex-col justify-between hover:shadow-lg transition-all duration-300">
        <div>
          <h3 class="text-lg font-semibold text-sky-800 mb-3 leading-snug">
            Pengembangan Sistem Penunjang Keputusan Penentuan UKT Mahasiswa dengan menggunakan Metode MOORA Studi Kasus Politeknik Negeri Malang
          </h3>
          <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-gray-900">2020</span>
            <span class="text-gray-600 text-sm">145 citations</span>
          </div>
        </div>
        <a href="#" class="mt-5 w-full text-center border border-sky-800 py-2 rounded-lg text-sky-700 font-semibold hover:bg-sky-800 hover:text-white transition">
          BACA
        </a>
      </div>
    </div>
  </section>

  <!-- Mata Kuliah -->
  <section class="py-10 px-8 max-w-6xl mx-auto">
    <h2 class="text-4xl font-bold text-sky-800 mb-8 text-center tracking-wide">Mata Kuliah</h2>
    <div class="grid md:grid-cols-2 gap-10">
      <!-- Semester Ganjil -->
      <div class="bg-white rounded-2xl shadow-md p-10">
        <h3 class="text-2xl font-semibold text-sky-700 mb-4">Semester Ganjil</h3>
        <ul class="text-gray-800 text-lg leading-relaxed space-y-2">
          <li>Sistem Manajemen Proses Bisnis</li>
          <li>Sistem Cerdas</li>
          <li>Pengolahan Citra dan Visi Komputer</li>
          <li>Manajemen Informasi</li>
        </ul>
      </div>

      <!-- Semester Genap -->
      <div class="bg-white rounded-2xl shadow-md p-10">
        <h3 class="text-2xl font-semibold text-sky-700 mb-4">Semester Genap</h3>
        <ul class="text-gray-800 text-lg leading-relaxed space-y-2">
          <li>Pengolahan Citra dan Visi Komputer</li>
          <li>Pembelajaran Mesin</li>
          <li>Konsultasi Publikasi Ilmiah</li>
          <li>Data Mining</li>
        </ul>
      </div>
    </div>
  </section>

</body>
</html>
