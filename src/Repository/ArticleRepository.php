<?php

namespace App\Repository;

use App\Core\Database;
use App\Models\Entity\Article;
use App\Models\viewModel\UserJoinArticle;
use PDO;

class ArticleRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getConnexion();
    }

    public function create(Article $article)
    {
        $sql = " INSERT INTO articles (titre , description , user_id)VALUES(?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$article->getTitre(), $article->getDescription(), $article->getUser()->getId()]);
    }

    public function selectArticleByEmail(string $email)
    {
        $sql = "SELECT u.*,a.titre , a.description , a.date_creation ,a.id AS article_id
        FROM users u 
        INNER JOIN articles a ON u.id = a.user_id
        WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, UserJoinArticle::class);
        return $stmt->fetchAll();
    }
    public function selectAll()
    {
        $sql = "SELECT u.*,a.titre , a.description , a.date_creation ,a.id AS article_id
        FROM users u 
        INNER JOIN articles a ON u.id = a.user_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, UserJoinArticle::class);
        return $stmt->fetchAll();
    }

    public function update(int $id, Article $article) {
        $sql = "UPDATE articles 
                SET titre = ?,
                    description = ?
                WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$article->getTitre(),$article->getDescription(),$id]);
    }
    public function delete(int $id)
    {
       
        $sql = "DELETE FROM articles WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
    
}
