<?php
    require_once "../models/database.php";
    require_once "../models/nc_items.php";

//création d'un nouvel objet de la table nc_items
$displayItemsobjet = new nc_items;
$idCategory = $_GET['id'];
$allVan = $displayItemsobjet->displayItems($idCategory);