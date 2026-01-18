<?php

namespace App\Service;

use App\Models\Entity\Article;
use App\Models\Entity\User;
use App\Repository\ArticleRepository;


class ArticlService
{
    private ArticleRepository $article_repository;

    public function __construct()
    {
        $this->article_repository = new ArticleRepository();
    }

    public function create(Article $article)
    {
        return $this->article_repository->create($article);
    }
    public function update(int $id, Article $article)
    {
        return $this->article_repository->update($id, $article);
    }
    public function delete(int $id)
    {
        return $this->article_repository->delete($id);
    }

    public function selectByEmail(string $email)
    {
        return $this->article_repository->selectArticleByEmail($email);
    }

    public function selectAll()
    {
        return $this->article_repository->selectAll();
    }
}
