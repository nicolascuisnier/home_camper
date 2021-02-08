<?php
    $errorMessage = [];
    $regexName = "/^[a-z A-Z]+$/";
    
    
    if (isset($_POST["login"])) {
      if (!preg_match($regexName, $_POST["login"])) {
        $errorMessage["login"] = "Veuillez choisir un login";
      }
    }
    if (isset($_POST["mail"])) {
      if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) { // utilisation d'un filtre propoé par php (evite les regex)
        $erreorMessage["mail"] = "Adresse mail non valide";
      }
      if (empty($_POST["mail"])) {
        $erreorMessage["mail"] = "Veuillez saisir une adresse mail valide";
      }
    }
    if (isset($_POST["password"])) {
      if (empty($_POST["password"])) {
        $erreorMessage["password"] = "Veuillez saisir un mot de passe";
      }
    }
    ?>
    