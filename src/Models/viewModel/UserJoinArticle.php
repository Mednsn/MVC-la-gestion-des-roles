<?php
namespace App\Models\viewModel;



class UserJoinArticle
{
    public int $id;
    public string $name;
    public string $email;
    public string $password;
    public string $role;
    public string $titre ;
    public string $description;
    public string $date_creation;
    public int $article_id;
}