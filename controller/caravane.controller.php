<?php
    require_once "../models/database.php";
    require_once "../models/nc_items.php";
    
    $message = [''];
// création d'un nouvel objet pour la table nc_items
$displayItemsobjet = new nc_items;
//création d'une fonction qui me permet de recupére id dans l'url methote get
$idCategory = $_GET['id'];
//récupération de toutes les info qui corréspond a id de la catégorie choisie
// if(!isset($_GET['id'])){
$allCaravane = $displayItemsobjet->displayItems($idCategory);

// }else{
//     $message['vue'] = 'aucune annonce';
// }
// var_dump($message);