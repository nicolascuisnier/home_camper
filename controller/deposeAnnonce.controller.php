<?php

$errorMessage = [];



    if(isset($_POST["mail"])){
       if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL )){
           $errorMessage['mail'] = "Vérifiez votre adresse email, son format n'est pas valide";
       }
       if(empty($_POST['mail'])){
           $errorMessage['mail'] = 'Champ obligatoire';
    }
}

    if(isset($_POST["password"])){
        if(empty($_POST['password'])){
            $errorMessage['password'] = 'Champ obligatoire';
        }
    }
    


