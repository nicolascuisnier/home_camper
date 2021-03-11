<?php
    require_once "../models/database.php";
    require_once "../models/nc_items.php";


$descriptItemsobjet = new nc_items;

$idCategory = $itemId = $delItem = $_GET['id'];

$descriptCaravane = $descriptItemsobjet->descriptItems($idCategory);





if(isset($_POST['deleteBtn'])){
    $deletItemsObjet = new nc_items;
    $deletItemsObjet->deleteAnnonce($delItem);
    header('location: /view/admin.php');
    
}
if(isset($_POST['validateBtn'])){
    $validItemsObjet = new nc_items;
    $validItemsObjet->valideItems($itemId);
    header('location: /view/admin.php');
}   