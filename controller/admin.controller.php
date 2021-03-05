<?php
require_once "../models/database.php";
require_once "../models/nc_user.php";
require_once "../models/nc_items.php";

// création d'un tableau contenant toutes les annonces
$viewAnnonceObjet = new nc_user;
$viewAnnonceArray = $viewAnnonceObjet->viewAnnonce();




// creation d'un nouvel objet pour la suppression d'une annonce
$deleteAnnonceObjet = new nc_items;
$deleteAnnonceObjet -> deleteAnnonce();



//message d'erreur
$errorMessage = [];


// Verification des différents $_POST
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







