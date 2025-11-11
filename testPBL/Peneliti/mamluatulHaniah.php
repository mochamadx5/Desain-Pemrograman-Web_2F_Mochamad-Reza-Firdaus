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
<body class="bg-white flex">

  <!-- Sidebar -->
  <div class="w-1/3 min-h-screen bg-sky-50 text-gray-900 flex flex-col items-center p-8 gap-10 shadow-xl border-r border-gray-200">
    <h1 class="text-3xl font-bold tracking-wide text-center text-sky-700">Profil Peneliti</h1>

    <!-- Biodata -->
    <div class="bg-white rounded-2xl p-6 w-full shadow-md flex flex-col items-center gap-6 border border-gray-200">
      <img src="../Anggota_Lab/Mamluatul_Haniah.jpg" alt="Rosa Andrie Asmara" class="w-36 h-36 rounded-full border-4 shadow-md object-cover">

      <h2 class="text-lg font-semibold text-center leading-snug">
        Prof. Dr. Eng. Rosa Andrie Asmara, ST., MT.
      </h2>

      <div class="w-full space-y-3 text-sm">
        <div class="flex justify-between border-b border-gray-300 pb-1">
          <span class="font-semibold text-gray-700">NIP</span>
          <span>199002062019032013</span>
        </div>
        <div class="flex justify-between border-b border-gray-300 pb-1">
          <span class="font-semibold text-gray-700">NIDN</span>
          <span>0006029003</span>
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
          <span class="text-[13px] text-gray-600">mamluatulhaniah@polinema.ac.id</span>
        </div>
      </div>
    </div>

    <!-- Pendidikan -->
    <div class="w-full bg-white border border-gray-200 rounded-2xl shadow-md p-6">
      <h3 class="text-2xl font-semibold mb-4 text-sky-700">Pendidikan</h3>
      <ul class="list-disc list-inside text-base text-gray-800 space-y-3 leading-relaxed">
        <li><strong>S2 Teknik Informatika</strong> — Institut Teknologi Sepuluh Nopember (2016)</li>
        <li><strong>S1 Ilmu Komputer</strong> — Universitas Brawijaya (2014)</li>
      </ul>
    </div>

    <!-- Sertifikasi -->
    <div class="w-full bg-white border border-gray-200 rounded-2xl shadow-md p-6">
      <h3 class="text-2xl font-semibold mb-4 text-sky-700">Sertifikasi</h3>
      <ul class="list-disc list-inside text-base text-gray-800 space-y-3 leading-relaxed">
        <li>IT Specialist - Artificial Intelligence Pearson VUE (2025)</li>
        <li>Microsoft certified Azure AI Fundamentals Microsoft (2022)</li>
      </ul>
    </div>
  </div>

  <!-- Konten Kanan -->
  <div class="flex-1 p-10 bg-white overflow-y-auto">
    <h2 class="text-4xl font-bold text-gray-800 mb-8 text-center">Riset dan Penelitian</h2>

    <!-- Tombol Filter -->
    <div class="flex justify-center gap-6 mb-10">
      <button class="px-6 py-2 bg-sky-700 text-white font-semibold rounded-xl shadow hover:bg-sky-800 transition">Most Cited</button>
      <button class="px-6 py-2 border border-gray-400 text-gray-700 rounded-xl font-semibold hover:bg-gray-100 transition">Latest</button>
      <button class="px-6 py-2 border border-gray-400 text-gray-700 rounded-xl font-semibold hover:bg-gray-100 transition">Oldest</button>
    </div>

    <!-- Grid Kartu Penelitian -->
    <div class="grid md:grid-cols-3 gap-8 items-stretch">
      <!-- Card 1 -->
      <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col justify-between transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
        <div>
          <h3 class="text-lg font-semibold text-sky-800 mb-3 leading-snug">
            Prediksi Harga Saham Syariah Menggunakan Algoritma Long Short-Term Memory (LSTM)
          </h3>
          <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-gray-900">2023</span>
            <span class="text-gray-600 text-sm">55 citations</span>
          </div>
        </div>
        <a href="#" class="mt-5 w-full text-center border border-sky-800 py-2 rounded-lg text-sky-700 font-semibold hover:bg-sky-800 hover:text-white transition">
          BACA
        </a>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col justify-between transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
        <div>
          <h3 class="text-lg font-semibold text-sky-800 mb-3 leading-snug">
            Batik classification using neural network with gray level co-occurence matrix and statistical color feature extraction
          </h3>
          <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-gray-900">2015</span>
            <span class="text-gray-600 text-sm">43 citations</span>
          </div>
        </div>
        <a href="#" class="mt-5 w-full text-center border border-sky-800 py-2 rounded-lg text-sky-700 font-semibold hover:bg-sky-800 hover:text-white transition">
          BACA
        </a>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col justify-between transition-all duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
        <div>
          <h3 class="text-lg font-semibold text-sky-800 mb-3 leading-snug">
            Parameter Optimization Of Holt–Winters Exponential Smoothing Using Golden Section Method for Predicting Indonesian Car Sales
          </h3>
          <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-gray-900">2021</span>
            <span class="text-gray-600 text-sm">11 citations</span>
          </div>
        </div>
        <a href="#" class="mt-5 w-full text-center border border-sky-800 py-2 rounded-lg text-sky-700 font-semibold hover:bg-sky-800 hover:text-white transition">
          BACA
        </a>
      </div>
    </div>

    <!-- Mata Kuliah -->
    <section class="mt-12">
      <h2 class="text-4xl font-bold text-sky-800 mb-8 text-center tracking-wide">Mata Kuliah</h2>
      <div class="grid md:grid-cols-2 gap-10">
        <!-- Semester Ganjil -->
        <div class="bg-white rounded-2xl shadow-md p-10">
          <h3 class="text-2xl font-semibold text-sky-700 mb-4">Semester Ganjil</h3>
          <ul class="text-gray-800 text-lg leading-relaxed space-y-2">
            <li>Praktikum Dasar Pemrograman</li>
            <li>Pengolahan Citra dan Visi Komputer</li>
            <li>Dasar Pemrograman</li>
          </ul>
        </div>

        <!-- Semester Genap -->
        <div class="bg-white rounded-2xl shadow-md p-10">
          <h3 class="text-2xl font-semibold text-sky-700 mb-4">Semester Genap</h3>
          <ul class="text-gray-800 text-lg leading-relaxed space-y-2">
            <li>Statistik Komputasi</li>
            <li>Praktikum Algoritma dan Struktur Data</li>
            <li>Algoritma dan Struktur Data</li>
          </ul>
        </div>
      </div>
    </section>
  </div>
</body>
</html>
