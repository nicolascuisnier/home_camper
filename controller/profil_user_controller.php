<?php
require_once "../models/database.php";
require_once "../models/nc_user.php";
require_once "../models/nc_items.php";

// Mise en place d'un t'ableau d'erreur
$errors = [];

// Mise en place d'un tableau de message
$messages = [];
$update = false;
$delete = false;

// Création d'une fonction pour afficher le détail de l'utilisateur
function getUserDetails()
{
  $viewUserObjet = new nc_user;
  $viewUserDetails = $viewUserObjet->getDetailUser($_SESSION['nc_user']['id']);
  return $viewUserDetails;
}

// Création d'une fonction por afficher les items de l'utilisateur
function getUserAnnonces()
{
  $viewUserObjet = new nc_user;
  $viewUserArray = $viewUserObjet->viewUser($_SESSION['nc_user']['id']);
  return $viewUserArray;
  

  $messages['viewUser'] ='Aucine annonces';
}

// modification du profil de l'utilisateur

if (isset($_POST['updateBtn'])) {

  $arrayUpdate = [
    'id' => $_SESSION['nc_user']['id'],
    'login' => $_POST['login'],
    'mail' => $_POST['mail'],
    'Password' => !empty($_POST['verifPassword']) && !empty($_POST['password']) ? password_hash($_POST['verifPassword'],PASSWORD_DEFAULT) : $_SESSION['nc_user']['password']
  ];

  $updateUserObjet = new nc_user;
  $updateUserObjet->updateUser($arrayUpdate); 
  $update = true;
  $messages['updateUser'] = " Modification de vos données reussie";
}



if (isset($_POST['supBtn'])) {
  $deletUserObjet = new nc_user;
  $deletUserObjet->deleteUser($_SESSION['nc_user']['id']);
  session_destroy();
  header('location: /index.php');
}else{
  $messages['deleteuse'] = "Une erreur est survenue";
}


if(isset($_POST['supItemsBtn'])){
  $deletItemsObjet = new nc_items;
  $deletItemsObjet->deleteAnnonce($_POST['supItemsBtn']);
}




