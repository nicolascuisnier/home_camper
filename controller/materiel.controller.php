<?php
    require_once "../models/database.php";
    require_once "../models/nc_items.php";


$displayItemsobjet = new nc_items;

$idCategory = $_GET['id'];

$allMateriel = $displayItemsobjet->displayItems($idCategory);