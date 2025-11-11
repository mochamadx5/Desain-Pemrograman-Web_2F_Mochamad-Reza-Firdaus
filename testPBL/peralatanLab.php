<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fasilitas dan Peralatan - IVSS Lab</title>
  
  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="bg-white text-gray-800">

  <!-- Header -->
  <header class="py-8 bg-white shadow-md text-center relative">
    <!-- Tombol Back -->
    <div class="absolute left-6 top-6">
      <a href="landingPage.php" class="inline-flex items-center gap-2 px-4 py-2 bg-sky-700 text-white text-sm font-medium rounded-lg hover:bg-sky-800 transition">
        ←
      </a>
    </div>
    <h1 class="text-3xl md:text-4xl font-semibold text-sky-800 tracking-wide">
      Fasilitas dan Peralatan
    </h1>
  </header>

  <!-- Konten -->
  <main class="max-w-7xl mx-auto px-6 py-16 space-y-20">
    <!-- GRID FASILITAS -->
    <section class="grid md:grid-cols-2 sm:grid-cols-2 grid-cols-1 gap-10">
      <div class="bg-white rounded-3xl shadow-lg p-6 text-center border border-gray-300 
                  transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <img src="Assets_Lab/komputer.png" alt="Komputer Desktop" class="w-20 h-20 object-contain mx-auto mb-3">
        <h3 class="text-2xl font-semibold text-sky-800 mt-4">Komputer Desktop</h3>
        <p class="mt-2 text-gray-700 text-base leading-relaxed">
          Perangkat standar untuk pemrosesan data, pengujian, dan riset.
        </p>
      </div>
      <div class="bg-white rounded-3xl shadow-lg p-6 text-center border border-gray-300 
                  transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <img src="Assets_Lab/meja-kursi.png" alt="Meja & Kursi" class="w-20 h-20 object-contain mx-auto mb-3">
        <h3 class="text-2xl font-semibold text-sky-800 mt-4">Meja & Kursi</h3>
        <p class="mt-2 text-gray-700 text-base leading-relaxed">
          Perabot dasar untuk menunjang kenyamanan belajar, praktikum, dan riset.
        </p>
      </div>
    </section>
    <section class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-10">
      <div class="bg-white rounded-3xl shadow-lg p-6 text-center border border-gray-300 
                  transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <img src="Assets_Lab/ac.png" alt="AC" class="w-20 h-20 object-contain mx-auto mb-3">
        <h3 class="text-2xl font-semibold text-sky-800 mt-4">AC</h3>
        <p class="mt-2 text-gray-700 text-base leading-relaxed">
          Pendingin ruangan untuk menjaga suhu agar tetap nyaman selama proses belajar dan riset.
        </p>
      </div>

      <!-- 3 -->
      <div class="bg-white rounded-3xl shadow-lg p-6 text-center border border-gray-300 
                  transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <img src="Assets_Lab/air.png" alt="Air Mineral" class="w-20 h-20 object-contain mx-auto mb-3">
        <h3 class="text-2xl font-semibold text-sky-800 mt-4">Air Mineral</h3>
        <p class="mt-2 text-gray-700 text-base leading-relaxed">
          Air minum untuk menjaga hidrasi dan kenyamanan pengguna fasilitas.
        </p>
      </div>

      <!-- 4 -->
      <div class="bg-white rounded-3xl shadow-lg p-6 text-center border border-gray-300 
                  transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <img src="Assets_Lab/camera.png" alt="Intel RealSense D415 Camera" class="w-20 h-20 object-contain mx-auto mb-3">
        <h3 class="text-2xl font-semibold text-sky-800 mt-4">Intel RealSense D415 Camera</h3>
        <p class="mt-2 text-gray-700 text-base leading-relaxed">
          Kamera 3D khusus untuk riset di bidang Computer Vision dan Sistem Cerdas.
        </p>
      </div>
      <div class="bg-white rounded-3xl shadow-lg p-6 text-center border border-gray-300 
                  transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <img src="Assets_Lab/masjid.png" alt="Masjid" class="w-20 h-20 object-contain mx-auto mb-3">
        <h3 class="text-2xl font-semibold text-sky-800 mt-4">Area Mushola</h3>
        <p class="mt-2 text-gray-700 text-base leading-relaxed">
          Fasilitas khusus untuk kegiatan ibadah/sholat.
        </p>
      </div>
      <!-- 6 -->
      <div class="bg-white rounded-3xl shadow-lg p-6 text-center border border-gray-300 
                  transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <img src="Assets_Lab/cctv.png" alt="Camera 260fps" class="w-20 h-20 object-contain mx-auto mb-3">
        <h3 class="text-2xl font-semibold text-sky-800 mt-4">Camera 260fps</h3>
        <p class="mt-2 text-gray-700 text-base leading-relaxed">
          Kamera berkecepatan tinggi untuk analisis gerakan mendetail.
        </p>
      </div>

      <!-- 7 -->
      <div class="bg-white rounded-3xl shadow-lg p-6 text-center border border-gray-300 
                  transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <img src="Assets_Lab/lampu.png" alt="Peralatan Lampu" class="w-20 h-20 object-contain mx-auto mb-3">
        <h3 class="text-2xl font-semibold text-sky-800 mt-4">Peralatan Lampu</h3>
        <p class="mt-2 text-gray-700 text-base leading-relaxed">
          Pencahayaan optimal untuk memastikan kondisi pengambilan data visual yang konsisten.
        </p>
      </div>

      <!-- 8 -->
      <div class="bg-white rounded-3xl shadow-lg p-6 text-center border border-gray-300 
                  transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <img src="Assets_Lab/box-card.png" alt="Box Pengambilan Data" class="w-20 h-20 object-contain mx-auto mb-3">
        <h3 class="text-2xl font-semibold text-sky-800 mt-4">Box Pengambilan Data</h3>
        <p class="mt-2 text-gray-700 text-base leading-relaxed">
          Wadah khusus untuk mengontrol lingkungan selama pengumpulan data riset.
        </p>
      </div>
      
      <div class="bg-white rounded-3xl shadow-lg p-6 text-center border border-gray-300 
                  transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl">
        <img src="Assets_Lab/IOT.png" alt="OpenMVCamH7" class="w-20 h-20 object-contain mx-auto mb-3">
        <h3 class="text-2xl font-semibold text-sky-800 mt-4">OpenMVCamH7</h3>
        <p class="mt-2 text-gray-700 text-base leading-relaxed">
          Perangkat kamera mikrokontroler atau modul yang berfokus 
          pada Computer Vision dan Machine Learning untuk sistem embedded.
        </p>
      </div>
    </section>
  </main>

</body>
</html>
