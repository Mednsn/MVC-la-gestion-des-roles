<?php

use App\Service\ArticlService;
use App\Service\UserService;

session_start();
// require_once __DIR__ . '/../../Service/ArticlService.php';

$articleService = new  ArticlService();
$userService = new  UserService();

$articles = $articleService->selectAll();

$email = $_SESSION['email'];
$user = $userService->selectUserByEmail($email);




?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mes Articles - MVC App</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#dc2626',
            secondary: '#f97316',
            accent: '#16a34a',
          },
          animation: {
            gradient: 'gradient 8s ease infinite',
            fade: 'fade 1s ease-out',
          },
          keyframes: {
            gradient: {
              '0%,100%': {
                backgroundPosition: '0% 50%'
              },
              '50%': {
                backgroundPosition: '100% 50%'
              },
            },
            fade: {
              '0%': {
                opacity: 0,
                transform: 'translateY(20px)'
              },
              '100%': {
                opacity: 1,
                transform: 'translateY(0)'
              },
            },
          },
        },
      },
    }
  </script>
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

      <a href="/logout" class="bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600 transition">Logout</a>

    </header>
    <div class="flex justify-between rounded-xl py-3 border-2 border-orange-500">
      <form class="flex gap-3" action="/addArticle" method="post">
        <input type="hidden" name="user-email" value="<?php echo $email ?>">
        <div class="flex w-full items-center gap-1">
          <label class="block text-white font-bold text-gray-600">Description :</label>
          <textarea name="description"
            class="w-700 mt-1 h-40  px-4 text-white py-3 bg-black/20 hover:bg-black/70  rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-accent hover:border-secondary transition" />
          votre description :..........</textarea>
        </div>
        <div class="grid align-items-center">

          <div class="flex items-center gap-2">
            <label class="block text-white font-bold text-gray-600">Titre :</label>
            <input type="text" name="titre" placeholder="ex: titre de votre article"
              class="w-full mt-1 text-white px-4 py-3 bg-black/20 hover:bg-black/70 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary hover:border-primary transition" />
          </div>

          <div class="flex items-center">
            <button type="submit" class="bg-white/60 text-red-700 font-mono px-6 py-2 rounded-lg  hover:bg-black/70 hover:text-white transition">Ajouter Un Article</button>
          </div>
        </div>
      </form>
    </div>
    <!-- Articles Section -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-5 mb-16">
      <!-- Card Example -->
<?php if($articles) : 
  foreach($articles as $article):?>
      <div class="bg-black/60 backdrop-blur-md p-6 rounded-2xl shadow hover:shadow-xl transition transform hover:-translate-y-1">
        <h2 class="text-xl font-bold mb-2 text-indigo-300"><?php echo $article->titre ?></h2>
        <p class="text-gray-200 mb-4"><?php echo $article->description ?></p>
        <p class="text-gray-400 text-sm">Publié par <?php echo $article->name ?> le: <?php echo $article->date_creation ?></p>
      </div>
      <?php endforeach;
     endif;?>

     

    <!-- Footer -->
    <footer class="text-center text-gray-200 py-6 border-t border-gray-400">
      &copy; 2026 MVC App. Tous droits réservés.
    </footer>

  </div>

</body>

</html>