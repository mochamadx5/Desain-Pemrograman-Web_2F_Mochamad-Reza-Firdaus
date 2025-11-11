<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - IVSS Lab</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="min-h-screen bg-gradient-to-br from-sky-100 via-white to-sky-50 flex flex-col justify-center items-center px-4">

  <!-- Judul -->
  <h1 class="text-3xl md:text-4xl font-semibold text-sky-800 mb-10 text-center">
    Intelligent Vision and Smart System
  </h1>

  <!-- Card Register -->
  <div class="bg-white shadow-lg rounded-2xl p-10 w-full max-w-lg border border-gray-200">
    
    <!-- Logo -->
    <div class="flex items-center justify-center gap-3 mb-6">
      <h2 class="text-sky-400 text-6xl font-bold">IVSS</h2>
      <img src="Assets_Lab/img-logo.png" alt="Logo" class="w-12 h-12">
    </div>

    <!-- Judul -->
    <h3 class="text-2xl font-semibold text-gray-800 text-center mb-8">Register</h3>

    <!-- Form -->
    <form action="#" method="POST" class="space-y-6">
      <!-- Nama -->
      <div>
        <label for="nama" class="block text-gray-700 text-lg mb-2">Nama</label>
        <input type="text" id="nama" name="nama" required
               class="w-full border border-gray-300 rounded-lg p-3.5 focus:outline-none focus:ring-2 focus:ring-sky-400 transition">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 text-lg mb-2">Email</label>
        <input type="email" id="email" name="email" required
               class="w-full border border-gray-300 rounded-lg p-3.5 focus:outline-none focus:ring-2 focus:ring-sky-400 transition">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-gray-700 text-lg mb-2">Password</label>
        <input type="password" id="password" name="password" required
               class="w-full border border-gray-300 rounded-lg p-3.5 focus:outline-none focus:ring-2 focus:ring-sky-400 transition">
      </div>

      <!-- Tombol Register -->
      <button type="submit"
              class="w-full py-3 bg-sky-600 text-white font-semibold rounded-lg shadow-md hover:bg-sky-700 transition">
        Register
      </button>
    </form>

    <!-- Link tambahan -->
    <div class="text-center mt-6 text-base">
      <a href="login.php" class="text-sky-600 font-semibold underline hover:text-sky-800 transition">
        Sudah punya akun? Log in
      </a>
    </div>

  </div>

</body>
</html>
