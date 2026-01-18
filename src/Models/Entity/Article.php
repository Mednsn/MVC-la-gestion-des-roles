<?php
namespace App\Models\Entity;

USE DATETIME;


class Article
{
    private ?int $id;
    private string $titre ;
    private string $description;
    private ?DATETIME $date_creation;
    private User $user;

    public function __construct(string $titre, string $description,User $user, ?DATETIME $date_creation = null,?int $id = null)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->user = $user;
        $this->date_creation = $date_creation;
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getUser(){
        return $this->user;
    }
    public function getDateCreation(){
        return $this->date_creation;
    }


}