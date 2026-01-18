<?php

namespace App\controllers;

use App\Models\Entity\Article;
use App\Models\Entity\User;
use App\Service\ArticlService;
use App\Service\UserService;

class ArticleController
{
    private UserService $user_service;
    private ArticlService $articleservice;


    public function __construct()
    {
        $this->user_service = new UserService();
        $this->articleservice = new ArticlService();
    }
    public function index()
    {
        session_start();

        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit();
        }

        require_once __DIR__ . '/../views/front/articles.php';
    }
    public function create()
    {
        if (!isset($_POST['titre']) && !isset($_POST['description'])) {

            $users = $this->user_service->selectUserByEmail($_POST['user-email']);
            $user = new User($users->name, $users->email, $users->password, $users->role, $users->id);

            $artcle = new Article($_POST['titre'], $_POST['description'], $user);
            $this->articleservice->create($artcle);
            header('location: /article');
        }
        header('location: /article');
    }
    public function deleteArticle()
    {
        $this->articleservice->delete($_POST['supprimer_id']);
        header('location: /dashboard');
    }
}
