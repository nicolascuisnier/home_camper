<?php
    require_once "../models/database.php";
    require_once "../models/nc_items.php";

// création d'un nouvel objet pour la table nc_items
$displayItemsobjet = new nc_items;
//création d'une fonction qui me permet de recupére id dans l'url methote get
$idCategory = $_GET['id'];
//récupération de toutes les info qui corréspond a id de la catégorie choisie
$allCampingCar = $displayItemsobjet->displayItems($idCategory);
