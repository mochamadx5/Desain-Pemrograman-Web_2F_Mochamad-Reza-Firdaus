<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laboratorium IVSS</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
    html {
      scroll-behavior: smooth; /* biar scroll halus */
    }
    * {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="bg-white text-slate-900">

  <!-- HEADER -->
  <<header class="px-[50px] py-[25px] bg-white shadow-md flex justify-between items-center sticky top-0 z-50">
  <!-- Logo -->
  <div class="text-sky-500 text-4xl font-extrabold">IVSS</div>

  <!-- Navigation -->
  <nav class="hidden md:flex items-center gap-8 text-[18px] font-medium text-gray-800">
    <a href="#visi-misi" class="hover:text-sky-600 transition-colors duration-200">Visi dan Misi</a>
    <a href="#anggota-lab" class="hover:text-sky-600 transition-colors duration-200">Anggota Laboratorium</a>
    <a href="peralatanLab.php" class="hover:text-sky-600 transition-colors duration-200">Fasilitas dan Peralatan</a>
    <a href="#" class="hover:text-sky-600 transition-colors duration-200">Riset & Penelitian</a>
    <a href="#" class="hover:text-sky-600 transition-colors duration-200">Berita</a>

    <!-- Tombol Login / Register -->
    <!-- Login -->
    <div class="flex items-center gap-4 ml-8">
      <a href="login.php" 
     class="px-5 py-2 text-[16px] font-semibold text-sky-600 border border-sky-500 rounded-full hover:bg-sky-500 hover:text-white transition-all duration-200">
     Login
    </a>
    <!-- Register -->
    <a href="register.php" 
    class="px-5 py-2 text-[16px] font-semibold text-white bg-sky-600 rounded-full hover:bg-sky-700 transition-all duration-200">
    Register
    </a>
    </div>

  </nav>
</header>

  <!-- HERO SECTION -->
  <section class="bg-gradient-to-tr from-[#E8F2FF] via-[#D6E7FF] to-[#BFD9FF] px-[50px] pt-[80px] pb-[100px]">
    <div class="max-w-screen-xl mx-auto flex flex-col lg:flex-row justify-between items-center gap-[60px]">
      <div class="flex-1 flex flex-col gap-6">
        <h1 class="font-extrabold leading-tight text-sky-900" style="font-size: 42px; line-height: 1.2;">
          Explore the Future <br>
          <span class="text-sky-700">of Vision & Systems</span>
        </h1>
         <p class="text-gray-800 text-justify" style="font-size: 18px; font-weight: 500; line-height: 1.7;">
        <span class="text-sky-700 font-semibold">Laboratorium Visi Cerdas dan Sistem Cerdas</span> 
        merupakan pusat riset dan pengembangan di bawah Jurusan Teknologi Informasi Politeknik Negeri Malang 
        yang berfokus pada bidang intelligent vision dan smart system. 
        Laboratorium ini menjadi wadah bagi dosen dan mahasiswa untuk melakukan penelitian, pembelajaran, 
        serta pelatihan dalam pengembangan sistem cerdas berbasis pengolahan citra dan kecerdasan buatan.
        <br><br>
        Penelitian di laboratorium ini mengintegrasikan computer vision, AI, dan IoT 
        untuk menciptakan solusi inovatif yang mampu mengenali, menganalisis, serta merespon lingkungan secara mandiri.
      </p>
      </div>
      <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=800" 
           alt="Robot AI"
           class="w-full max-w-md rounded-2xl shadow-xl" />
    </div>
  </section>

  <!-- VISI & MISI SECTION -->
  <section id="visi-misi" class="scroll-mt-[120px] max-w-screen-xl mx-auto px-[50px] py-[70px] flex flex-col lg:flex-row justify-between items-start gap-[50px]">
    <!-- VISI -->
    <div class="bg-white rounded-[30px] shadow-md p-[40px] flex-1 border border-gray-200 hover:shadow-lg transition-shadow duration-300">
      <h2 class="text-sky-800 text-3xl font-bold mb-5 text-center">Visi</h2>
      <p class="text-gray-700 text-lg leading-relaxed text-justify">
        Menjadi laboratorium unggulan dalam pengembangan teknologi penglihatan cerdas (Intelligent Vision) dan sistem cerdas terintegrasi (Smart Systems) yang inovatif, aplikatif, serta berdaya saing nasional dan internasional untuk mendukung kemajuan bidang teknologi informasi dan industri berbasis kecerdasan buatan.
      </p>
    </div>

    <!-- MISI -->
    <div class="bg-white rounded-[30px] shadow-md p-[40px] flex-1 border border-gray-200 hover:shadow-lg transition-shadow duration-300">
      <h2 class="text-sky-800 text-3xl font-bold mb-5 text-center">Misi</h2>
      <ul class="list-disc list-inside text-gray-700 text-lg leading-relaxed space-y-3">
        <li>Melaksanakan penelitian dan inovasi di bidang computer vision, artificial intelligence, dan smart systems yang berorientasi pada kebutuhan industri dan masyarakat.</li>
        <li>Menyediakan fasilitas riset dan pelatihan bagi dosen dan mahasiswa Polinema dalam pengembangan sistem berbasis penglihatan komputer, pembelajaran mesin, dan Internet of Things (IoT).</li>
        <li>Mendorong kolaborasi akademik dan industri dalam penerapan teknologi intelligent vision dan smart systems untuk menghasilkan solusi nyata dan berkelanjutan.</li>
        <li>Menghasilkan publikasi ilmiah, prototipe, dan produk inovatif yang mendukung reputasi Polinema sebagai institusi vokasi berkelas internasional.</li>
        <li>Mengembangkan ekosistem pembelajaran adaptif berbasis riset untuk mencetak sumber daya manusia unggul di bidang kecerdasan buatan dan sistem cerdas.</li>
      </ul>
    </div>
  </section>

  <!-- Anggota Lab -->
  <section id="anggota-lab" class="px-6 py-10 bg-gray-50">
  <div class="max-w-7xl mx-auto text-center">

    <!-- Judul -->
    <h2 class="text-sky-800 text-5xl font-black mb-10">
      Anggota Laboratorium
    </h2>

    <!-- Kepala Lab -->
    <div class="bg-white rounded-3xl shadow-md p-8 mb-12 border border-gray-300 flex flex-col items-center">
      <h3 class="text-2xl font-semibold mb-3">Kepala Lab</h3>
      <img class="w-48 h-48 rounded-full border-2 border-zinc-400 object-cover mb-4" 
           src="Anggota_Lab/Ulla_Delfana.jpg" 
           alt="Ulla Delfana" />
      <p class="text-xl font-medium">Dr. Ulla Delfana Rosiani, ST., MT.</p>
      <a href="riset_penelitian.php" 
         class="mt-2 text-amber-400 font-bold underline hover:text-amber-500 transition">
         Riset & Penelitian
      </a>
    </div>

    <!-- Grid Anggota -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- 1 -->
      <div class="bg-white rounded-3xl shadow-md p-6 border border-gray-300 flex flex-col items-center">
        <p class="text-2xl font-semibold mb-3">Peneliti</p>
        <img class="w-48 h-48 rounded-full border-2 border-zinc-400 object-cover mb-3" 
             src="Anggota_Lab/Mamluatul_Haniah.jpg" 
             alt="Mamluatul Hani'ah" />
        <p class="text-center text-lg font-medium">
          Mamluatul Hani'ah, S.Kom., M.Kom.
        </p>
        <a href="./Peneliti/mamluatulHaniah.php" 
           class="mt-2 text-amber-400 font-bold underline hover:text-amber-500 transition">
           Riset & Penelitian
        </a>
      </div>

      <!-- 2 -->
      <div class="bg-white rounded-3xl shadow-md p-6 border border-gray-300 flex flex-col items-center">
        <p class="text-2xl font-semibold mb-3">Peneliti</p>
        <img class="w-48 h-48 rounded-full border-2 border-zinc-400 object-cover mb-3" 
             src="Anggota_Lab/Rosa_Andrie_Asmara.jpg" 
             alt="Rosa Andrie Asmara" />
        <p class="text-center text-lg font-medium">
          Prof. Dr. Eng. Rosa Andrie Asmara, ST., MT.
        </p>
        <a href="./Peneliti/rosaAndrie.php" 
           class="mt-2 text-amber-400 font-bold underline hover:text-amber-500 transition">
           Riset & Penelitian
        </a>
      </div>

      <!-- 3 -->
      <div class="bg-white rounded-3xl shadow-md p-6 border border-gray-300 flex flex-col items-center">
        <p class="text-2xl font-semibold mb-3">Peneliti</p>
        <img class="w-48 h-48 rounded-full border-2 border-zinc-400 object-cover mb-3" 
             src="Anggota_Lab/Mungki_Astiningrum.jpg" 
             alt="Mungki Astiningrum" />
        <p class="text-center text-lg font-medium">
          Mungki Astiningrum, ST., M.Kom.
        </p>
        <a href="riset_penelitian.php" 
           class="mt-2 text-amber-400 font-bold underline hover:text-amber-500 transition">
           Riset & Penelitian
        </a>
      </div>

      <!-- 4 -->
      <div class="bg-white rounded-3xl shadow-md p-6 border border-gray-300 flex flex-col items-center">
        <p class="text-2xl font-semibold mb-3">Peneliti</p>
        <img class="w-48 h-48 rounded-full border-2 border-zinc-400 object-cover mb-3" 
             src="Anggota_Lab/Vivi_Nur.jpg" 
             alt="Vivi Nur Wijayaningrum" />
        <p class="text-center text-lg font-medium">
          Vivi Nur Wijayaningrum, S.Kom., M.Kom.
        </p>
        <a href="riset_penelitian.php" 
           class="mt-2 text-amber-400 font-bold underline hover:text-amber-500 transition">
           Riset & Penelitian
        </a>
      </div>

      <!-- 5 -->
      <div class="bg-white rounded-3xl shadow-md p-6 border border-gray-300 flex flex-col items-center">
        <p class="text-2xl font-semibold mb-3">Peneliti</p>
        <img class="w-48 h-48 rounded-full border-2 border-zinc-400 object-cover mb-3" 
             src="Anggota_Lab/Ely_Setyo_Astuti.jpg" 
             alt="Ely Setyo Astuti" />
        <p class="text-center text-lg font-medium">
          Dr. Ely Setyo Astuti, ST., MT.
        </p>
        <a href="riset_penelitian.php" 
           class="mt-2 text-amber-400 font-bold underline hover:text-amber-500 transition">
           Riset & Penelitian
        </a>
      </div>

      <!-- 6 -->
      <div class="bg-white rounded-3xl shadow-md p-6 border border-gray-300 flex flex-col items-center">
        <p class="text-2xl font-semibold mb-3">Peneliti</p>
        <img class="w-48 h-48 rounded-full border-2 border-zinc-400 object-cover mb-3" 
             src="Anggota_Lab/Wilda_Imama_Sabilla.jpg" 
             alt="Wilda Imama Sabilla" />
        <p class="text-center text-lg font-medium">
          Wilda Imama Sabilla, S.Kom., M.Kom.
        </p>
        <a href="riset_penelitian_wilda.php" 
           class="mt-2 text-amber-400 font-bold underline hover:text-amber-500 transition">
           Riset & Penelitian
        </a>
      </div>
    </div>
  </div>
</section>

</body>
</html>
