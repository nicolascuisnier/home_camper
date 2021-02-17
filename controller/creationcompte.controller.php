<?php
    $errorMessage = [];
    $regexName = "/^[a-z A-Z]+$/";
   
    


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
