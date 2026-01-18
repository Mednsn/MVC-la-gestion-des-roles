<?php

return [
    '/'          => ['HomeController', 'index'],
    '/home'      => ['HomeController', 'index'],
    '/dashboard' => ['DashboardController', 'index'],
    '/article'  => ['ArticleController', 'index'],
    '/addArticle' => ['ArticleController', 'create'],
    '/deleteArticle' => ['ArticleController', 'deleteArticle'],
    '/login'  => ['AuthController', 'login'],
    '/signeUp'  => ['AuthController', 'signeUp'],
    '/createAccounte' => ['AuthController', 'create'],
    '/inscrire' => ['AuthController', 'inscrire'],
    '/modifierAccounte' => ['AuthController', 'modifierAccounte'],
    '/deleteAccounte' => ['AuthController', 'deleteAccounte'],
    '/destroy' => ['AuthController', 'destroy']
];
