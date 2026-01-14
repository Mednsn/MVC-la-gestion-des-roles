<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Accueil – MVC App</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen relative bg-gray-900 text-white">

<!-- Background Image -->
<div class="absolute inset-0 z-0">
  <img src="stree.jpg" alt="Background" class="w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/40"></div>
</div>

<!-- Content -->
<div class="relative z-10 max-w-7xl mx-auto px-8 py-16">

  <!-- Header / Navbar -->
  <header class="flex justify-between items-center mb-16">
    <h1 class="text-4xl font-bold">MVC App</h1>
    <nav class="space-x-6">
      <a href="#hero" class="hover:text-gray-300 transition">Accueil</a>
      <a href="#features" class="hover:text-gray-300 transition">Fonctionnalités</a>
      <a href="#about" class="hover:text-gray-300 transition">À propos</a>
      <a href="#testimonials" class="hover:text-gray-300 transition">Avis</a>
      <a href="#contact" class="hover:text-gray-300 transition">Contact</a>
      <a href="?page=login" class="bg-gray-800/70 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition">Login</a>
    </nav>
  </header>

  <!-- Hero Section -->
  <section id="hero" class="text-center py-24">
    <h2 class="text-5xl font-extrabold mb-6">Bienvenue dans votre application MVC</h2>
    <p class="text-xl mb-10">Une architecture moderne, sécurisée et professionnelle pour vos projets PHP backend</p>
    <a href="?page=login" class="bg-gray-800/80 text-white px-8 py-4 rounded-xl font-bold hover:bg-gray-700 transition">Commencer</a>
  </section>

  <!-- Features Section -->
  <section id="features" class="grid grid-cols-1 md:grid-cols-3 gap-10 my-24">
    <div class="bg-white/10 p-8 rounded-2xl backdrop-blur-md shadow hover:shadow-xl transition">
      <h4 class="text-2xl font-bold mb-4">Architecture MVC</h4>
      <p>Code clair, maintenable et bien structuré.</p>
    </div>
    <div class="bg-white/10 p-8 rounded-2xl backdrop-blur-md shadow hover:shadow-xl transition">
      <h4 class="text-2xl font-bold mb-4">Sécurité</h4>
      <p>Authentification, rôles et protection des routes.</p>
    </div>
    <div class="bg-white/10 p-8 rounded-2xl backdrop-blur-md shadow hover:shadow-xl transition">
      <h4 class="text-2xl font-bold mb-4">Performance</h4>
      <p>PDO, requêtes préparées et optimisation backend.</p>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials" class="py-24 bg-white/10 backdrop-blur-md rounded-3xl p-12 shadow-xl mb-24">
    <h3 class="text-4xl font-bold text-center mb-12 text-gray-100">Ce que disent nos utilisateurs</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-gray-200">
      <div class="p-6 rounded-2xl bg-black/30">
        <p class="mb-4">"L'application est facile à utiliser et très professionnelle. Je recommande !"</p>
        <h4 class="font-bold">Alice D.</h4>
      </div>
      <div class="p-6 rounded-2xl bg-black/30">
        <p class="mb-4">"Le système MVC est bien structuré et sécurisé."</p>
        <h4 class="font-bold">Mohamed R.</h4>
      </div>
      <div class="p-6 rounded-2xl bg-black/30">
        <p class="mb-4">"Excellente base pour mes projets PHP."</p>
        <h4 class="font-bold">Sara L.</h4>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="my-24 max-w-3xl mx-auto text-center">
    <h3 class="text-4xl font-bold mb-6">À propos du projet</h3>
    <p class="text-lg leading-relaxed">Cette application est une base MVC développée from scratch pour apprendre les bonnes pratiques du développement backend en PHP. Elle intègre la programmation orientée objet, l'authentification, la gestion des rôles et une architecture claire.</p>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-24 max-w-4xl mx-auto text-center">
    <h3 class="text-4xl font-bold mb-6">Contactez-nous</h3>
    <p class="text-lg mb-8">Pour toute question ou support, envoyez-nous un message.</p>
    <form class="grid grid-cols-1 gap-6 md:grid-cols-2">
      <input type="text" placeholder="Nom" class="p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
      <input type="email" placeholder="Email" class="p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
      <textarea placeholder="Message" class="p-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200 md:col-span-2"></textarea>
      <button class="bg-gray-800/80 text-white px-6 py-3 rounded-xl font-bold hover:bg-gray-700 transition md:col-span-2">Envoyer</button>
    </form>
  </section>

  <!-- CTA Section -->
  <section class="text-center py-16">
    <a href="?page=login" class="bg-gray-800/80 text-white px-10 py-4 rounded-xl font-bold hover:bg-gray-700 transition">Se connecter</a>
  </section>

</div>

</body>
</html>