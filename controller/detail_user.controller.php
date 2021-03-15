<?php
require_once '../models/database.php';
require_once '../models/nc_user.php';
require_once '../controller/profil_user_controller.php';

$userObjet = new nc_user;

if(isset($_GET['id_user'])){
    $detailUserArray = $userObjet->getDetailUser($_GET['id_user']);
} else {
    $detailUserArray = false;
}
