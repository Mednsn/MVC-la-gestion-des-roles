<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login – MVC App</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#dc2626', // red
            secondary: '#f97316', // orange
            accent: '#16a34a', // green
          },
          animation: {
            gradient: 'gradient 8s ease infinite',
            fade: 'fade 1s ease-out',
          },
          keyframes: {
            gradient: {
              '0%,100%': { backgroundPosition: '0% 50%' },
              '50%': { backgroundPosition: '100% 50%' },
            },
            fade: {
              '0%': { opacity: 0, transform: 'translateY(20px)' },
              '100%': { opacity: 1, transform: 'translateY(0)' },
            },
          },
        },
      },
    }
  </script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-primary via-secondary to-accent bg-[length:200%_200%] animate-gradient">

  <!-- Login Card -->
  <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-8 animate-fade">
    
    <h1 class="text-3xl font-extrabold text-center text-primary mb-2">Connexion</h1>
    <p class="text-center text-gray-500 mb-6">Accédez à votre espace personnel</p>

    <form method="post" class="space-y-5">

      <div>
        <label class="block text-sm font-semibold text-gray-600">Email</label>
        <input type="email" name="email" placeholder="email@example.com"
          class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary hover:border-primary transition" />
      </div>

      <div>
        <label class="block text-sm font-semibold text-gray-600">Mot de passe</label>
        <input type="password" name="password" placeholder="••••••••"
          class="w-full mt-1 px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-accent hover:border-secondary transition" />
      </div>

      <button type="submit"
        class="w-full py-3 bg-gradient-to-r from-primary to-secondary text-white rounded-xl font-bold tracking-wide
               hover:from-secondary hover:to-accent transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
        Se connecter
      </button>

    </form>

    <div class="mt-6 flex justify-center gap-4 text-sm">
      <span class="text-primary font-semibold hover:underline cursor-pointer">Mot de passe oublié</span>
      <span class="text-accent font-semibold hover:underline cursor-pointer">Créer un compte</span>
    </div>

    <p class="text-center text-xs text-gray-400 mt-6">© 2026 MVC App</p>

  </div>

</body>
</html>
