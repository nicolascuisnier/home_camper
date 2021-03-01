<?php
session_start();

require_once "../models/database.php";
require_once "../models/nc_user.php";



$errorMessage = [];

if(isset($_POST["submitButton"])){


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
            $errorMessage['password'] = 'Champ oblogatoire';
        }

    }

    if(!empty($_POST['mail']) &&  !empty($_POST['password'])){
        $nc_userObjet = new nc_user;
        $goodPassword = $nc_userObjet->checkpassword($_POST['mail'], $_POST['password']);
        if(!$goodPassword){
            $errorMessage['password'] = 'Mot de passe/adresse mail incorrecte';
        }else{
         $userInfo = $nc_userObjet->detailUser();
         $_SESSION['nc_user'] = [
          'id' => $userInfo['user_id'],
          'name' => $userInfo['user_mail'],
          'role' => $userInfo['user_role']
         ]; 

        
         

         
         
    }
 
    if(empty($errorMessage)){
        header('location:../index.php');
        echo'Connexion reussie';

    }

}

}   


   


  


?>
