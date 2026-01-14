<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard – MVC App</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen relative bg-gray-100">

<!-- Background Image -->
<div class="absolute inset-0 z-0">
  <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c" alt="Dashboard Background" class="w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/40"></div>
</div>

<!-- Main Layout -->
<div class="relative z-10 flex min-h-screen">

  <!-- Sidebar -->
  <aside class="w-64 bg-gray-900/80 text-white flex flex-col backdrop-blur-lg">
    <div class="p-6 text-2xl font-extrabold">Admin Panel</div>
    <nav class="flex-1 px-4 space-y-2">
      <a href="#" class="block px-4 py-3 rounded-lg hover:bg-white/20 transition">Dashboard</a>
      <a href="#users" class="block px-4 py-3 rounded-lg hover:bg-white/20 transition">Users</a>
      <a href="#articles" class="block px-4 py-3 rounded-lg hover:bg-white/20 transition">Articles</a>
      <a href="#" class="block px-4 py-3 rounded-lg hover:bg-white/20 transition">Settings</a>
    </nav>
    <div class="p-4">
      <a href="?page=logout" class="block text-center bg-red-500 hover:bg-red-600 py-2 rounded-lg transition">Logout</a>
    </div>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8">

    <!-- Header -->
    <header class="flex justify-between items-center mb-10">
      <h1 class="text-3xl font-bold text-white">Dashboard</h1>
      <div class="flex items-center gap-4">
        <span class="text-gray-200">Admin</span>
        <div class="w-10 h-10 bg-indigo-600 text-white rounded-full flex items-center justify-center font-bold">A</div>
      </div>
    </header>

    <!-- Stats Cards -->
    <section class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
      <div class="bg-white/20 p-6 rounded-2xl shadow hover:shadow-xl transition backdrop-blur-md">
        <h3 class="text-gray-200">Users</h3>
        <p class="text-4xl font-bold text-indigo-400">120</p>
      </div>
      <div class="bg-white/20 p-6 rounded-2xl shadow hover:shadow-xl transition backdrop-blur-md">
        <h3 class="text-gray-200">Articles</h3>
        <p class="text-4xl font-bold text-purple-400">45</p>
      </div>
      <div class="bg-white/20 p-6 rounded-2xl shadow hover:shadow-xl transition backdrop-blur-md">
        <h3 class="text-gray-200">Admins</h3>
        <p class="text-4xl font-bold text-green-400">3</p>
      </div>
      <div class="bg-white/20 p-6 rounded-2xl shadow hover:shadow-xl transition backdrop-blur-md">
        <h3 class="text-gray-200">Status</h3>
        <p class="text-xl font-semibold text-green-400">Online</p>
      </div>
    </section>

    <!-- Users Table -->
    <section id="users" class="bg-white/20 rounded-2xl shadow p-6 backdrop-blur-md mb-10">
      <h2 class="text-xl font-bold text-gray-200 mb-4">Derniers utilisateurs</h2>
      <table class="w-full text-left text-gray-100">
        <thead>
          <tr class="border-b border-gray-400">
            <th class="py-2">Nom</th>
            <th>Email</th>
            <th>Rôle</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b border-gray-400 hover:bg-white/10 transition">
            <td class="py-2">John Doe</td>
            <td>john@mail.com</td>
            <td><span class="text-indigo-400 font-semibold">User</span></td>
          </tr>
          <tr class="border-b border-gray-400 hover:bg-white/10 transition">
            <td class="py-2">Admin One</td>
            <td>admin@mail.com</td>
            <td><span class="text-green-400 font-semibold">Admin</span></td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- Articles Table -->
    <section id="articles" class="bg-white/20 rounded-2xl shadow p-6 backdrop-blur-md">
      <h2 class="text-xl font-bold text-gray-200 mb-4">Derniers articles</h2>
      <table class="w-full text-left text-gray-100">
        <thead>
          <tr class="border-b border-gray-400">
            <th class="py-2">Titre</th>
            <th>Description</th>
            <th>Auteur</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b border-gray-400 hover:bg-white/10 transition">
            <td class="py-2">Mon premier article</td>
            <td>Un bref résumé de mon article pour aperçu.</td>
            <td>John Doe</td>
            <td>2026-01-14</td>
          </tr>
          <tr class="border-b border-gray-400 hover:bg-white/10 transition">
            <td class="py-2">Introduction MVC</td>
            <td>Présentation de l'architecture MVC pour PHP.</td>
            <td>Admin One</td>
            <td>2026-01-13</td>
          </tr>
        </tbody>
      </table>
    </section>

  </main>
</div>

</body>
</html>