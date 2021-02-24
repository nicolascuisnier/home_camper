<?php
require_once "../models/database.php";

$errorMessage = [];

if(isset($_POST['article_title'])) {
    if (!isset($_POST['article_title'])) {
        $errorMessage['article_title'] = 'Champs obligatoire';
    }
}

if(isset($_POST['article_content'])){
    if(!empty($_POST['article_content'])){
        $errorMessage['article_content'] = 'champs obligatoire';
    }
}

if(isset($_POST['article_img'])){
    if(!empty($_POST['article_img'])){
        $errorMessage['article_im'] = 'Champs obligatoire';
    }
}

if(isset($_POST['article_publication_date'])){
    if(!empty($_POST['article_publication_date'])){
        $errorMessage['article_publication_date'] = 'Champs obligatoire';
    }
}

if(empty($errorMessage)){

    // Création de l'objet user
    $addArticleObjet = new nc_article;
  
    // Création d'un tableau 
    $addArticle = [
      'article_title' => htmlspecialchars($_POST['article_title']),
      'article_content' => htmlspecialchars($_POST['article_content']),
      'article_img' => htmlspecialchars($_POST['article_img']),
      'article_publication_date' => htmlspecialchars('article_publication_date')
    ];
  
    if($addArticleObjet->addArticle($addArticle))
    {
      $errorMessage['addArticle'] = 'L\'article à bient été modifier';
    } else {
      $errorMessage['addArticle'] = 'Erreur lors de la modification';
    }
}

