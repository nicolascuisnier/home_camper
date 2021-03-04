<?php
    require_once "../models/database.php";
    require_once "../models/nc_items.php";


$descriptItemsobjet = new nc_items;

$idCategory = $_GET['id'];

$descriptCaravane = $descriptItemsobjet->descriptItems($idCategory);





