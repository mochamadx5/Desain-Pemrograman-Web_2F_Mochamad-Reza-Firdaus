<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - IVSS Lab</title>

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

  <!-- Card Login -->
  <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md border border-gray-200">
    
    <!-- Logo -->
    <div class="flex items-center justify-center gap-3 mb-6">
      <h2 class="text-sky-400 text-6xl font-bold">IVSS</h2>
      <img src="Assets_Lab/img-logo.png" alt="Logo" class="w-12 h-12">
    </div>

    <!-- Judul Login -->
    <h3 class="text-2xl font-semibold text-gray-800 text-center mb-8">Login</h3>

    <!-- Form -->
    <form action="#" method="POST" class="space-y-6">
      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 text-lg mb-2">Email</label>
        <input type="email" id="email" name="email" required
               class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-sky-400 transition">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-gray-700 text-lg mb-2">Password</label>
        <input type="password" id="password" name="password" required
               class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-sky-400 transition">
      </div>

      <!-- Tombol Masuk -->
      <button type="submit"
              class="w-full py-3 bg-sky-600 text-white font-semibold rounded-lg shadow-md hover:bg-sky-700 transition">
        Masuk
      </button>
    </form>

    <!-- Link tambahan -->
    <div class="flex justify-between mt-6 text-sm">
      <a href="#" class="text-sky-600 font-semibold underline hover:text-sky-800 transition">Lupa Password</a>
      <a href="#" class="text-sky-600 font-semibold underline hover:text-sky-800 transition">Daftar</a>
    </div>

  </div>

</body>
</html>
