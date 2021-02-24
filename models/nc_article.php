<?php
    require_once "../models/database.php";


class nc_article extends DataBase{

public function addArticle(array $addArticle)
{

    // Création de la requete
    $query = "INSERT INTO `nc_article` (`article_title`, `article_content`, `article_img`, `article_publication_date`  ) 
    VALUES (':article_title', ':article_content',':article_img',':article_publication_date')";

    // Préparation de la requete
    $addArticleQuery = $this->DataBase->prepare($query);

// Je bind la value des marqueurs nominatif
$addArticleQuery->bindValue(':article_title', $addArticle['article_title'], PDO::PARAM_STR);
$addArticleQuery->bindValue(':article_content', $addArticle['article_content'], PDO::PARAM_STR);
$addArticleQuery->bindValue(':article_img', $addArticle['article_img'], PDO::PARAM_STR);
$addArticleQuery->bindValue(':article_publication_date', $addArticle['article_publication_date'], PDO::PARAM_STR);

if($addArticleQuery->execute()){
    return true;
} else{
    return false;
}



}

 




}
