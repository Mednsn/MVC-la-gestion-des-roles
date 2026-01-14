<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mes Articles – MVC App</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen relative bg-gray-100">

  <!-- Background Image -->
  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d" alt="Background" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/20 to-black/40"></div>
  </div>

  <!-- Page Content -->
  <div class="relative z-10 max-w-7xl mx-auto px-8 py-16">

    <!-- Header -->
    <header class="flex justify-between items-center mb-12 text-white">
      <h1 class="text-4xl font-bold">Mes Articles</h1>
      <a href="?page=logout" class="bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600 transition">Logout</a>
    </header>

    <!-- Articles Section -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
      <!-- Card Example -->
      <div class="bg-black/60 backdrop-blur-md p-6 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1">
        <h2 class="text-xl font-bold mb-2 text-indigo-300">Mon premier article</h2>
        <p class="text-gray-200 mb-4">Un bref résumé de mon article pour aperçu.</p>
        <p class="text-gray-400 text-sm">Publié le: 2026-01-14</p>
      </div>

      <div class="bg-black/60 backdrop-blur-md p-6 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1">
        <h2 class="text-xl font-bold mb-2 text-green-300">Introduction MVC</h2>
        <p class="text-gray-200 mb-4">Présentation de l'architecture MVC pour PHP.</p>
        <p class="text-gray-400 text-sm">Publié le: 2026-01-13</p>
      </div>

      <div class="bg-black/60 backdrop-blur-md p-6 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1">
        <h2 class="text-xl font-bold mb-2 text-pink-300">Article Exemple</h2>
        <p class="text-gray-200 mb-4">Exemple d'article pour démonstration du layout.</p>
        <p class="text-gray-400 text-sm">Publié le: 2026-01-12</p>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-gray-200 py-6 border-t border-gray-400">
      &copy; 2026 MVC App. Tous droits réservés.
    </footer>

  </div>

</body>
</html>
