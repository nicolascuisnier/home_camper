<?php
    require_once "../models/nc_user.php";
    require_once "../models/database.php";

    $errorMessage = [];
    $regexName = "/^[a-z A-Z]+$/";
   
  
  
  
    $showForm = true;

  if (isset($_POST['submit'])) {


    // condition login
if (isset($_POST["login"])) {
  if (!preg_match($regexName, $_POST["login"])) {
    $errorMessage["login"] = "Vérifiez votre login, son format n'est pas valide. ";
  }
  if(empty($_POST['login'])){
    $errorMessage['login'] = 'Login obligatoire';
  }
}


// condition mail
if (isset($_POST["mail"])) {
  if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) { // utilisation d'un filtre propoé par php (evite les regex)
    $errorMessage["mail"] = "Vérifiez votre adresse email, son format n'est pas valide";
  }
  if (empty($_POST["mail"])){
    $errorMessage["mail"] = 'Champ obligatoire';
  }
}


// condition mot de passe
if (isset($_POST["password"])){
  if(empty($_POST['password'])){
    $errorMessage['password'] = 'Mot de passe obligatoire';
  }
}




// Création d'une condition si le formulaire est vide
if(empty($errorMessage)){

  // Création de l'objet user
  $addUserObjet = new nc_user;

  // Création d'un tableau 
  $addUser = [
    'user_name' => htmlspecialchars($_POST['login']),
    'user_mail' => htmlspecialchars($_POST['mail']),
    'user_password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    'user_role' => htmlspecialchars('')
  ];

  if($addUserObjet->addUser($addUser))
  {
    $errorMessage['addUser'] = 'Félicitation votre compte à été crée';
    header('location:../view/connexion.php');
  } else {
    $errorMessage['addUser'] = 'Erreur de connexion';
  }

} 
}

