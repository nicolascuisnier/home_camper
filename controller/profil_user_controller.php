<?php
require_once "../models/database.php";
require_once "../models/nc_user.php";

$userObjet = new nc_user;

if(isset($_GET['idUser'])){

    $detailsUsertArray = $userObjet->getDetailsUser($_GET['idUser']);
} else {

    $detailsUsertArray = false;

}