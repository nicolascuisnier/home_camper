<?php
require_once "../models/database.php";
require_once "../models/nc_category.php";


$category = new nc_category;

$categoryArray = $category -> selectCategory();


$selectCategory = [];
foreach($categoryArray as $value){
    $selectCategory[$value['category_id']] = $value['category_Name'];

}



    $errorMessage = [];
    $regexName = "/^[a-z A-Z]+$/";
    $regexPrice = "[0-9]{1,}[.,]{0,1}[0-9]{0,2}";
    
    
    
    $showForm = true;
   
    
    if (isset($_POST["submit"])) {


       
        if (isset($_POST["selectCategory"])) {
               if(empty($_POST["selectCategory"])){
                   $errorMessage["selectCategory"] = "Merci de choisir une categorie";
                }if($_POST["selectCategory"] == 0){
                    $errorMessage["selectCategory"] = "Merci de choisir une categorie";
                }
            }
        
    

        if (isset($_POST["titleAd"])) {
            if (!preg_match($regexName, $_POST["titleAd"])) {
                $errorMessage["titleAd"] = "Veuillez choisir un titre correct (ex = caravane)"; //si le titre n'est pas renseigner il y a un méssage d'erreur.
            }
        }
    

        if (isset($_POST["description"])) {
            if (!preg_match($regexName, $_POST["description"])) {
                $errorMessage["description"] = "Veuillez saisir une descritption"; //si le titre n'est pas renseigner il y a un méssage d'erreur.
            }
        }
    

        if (isset($_POST["price"])) {
            if (empty( $_POST["price"])) {
                $errorMessage["price"] = "Veuillez renseigner un prix (ex= 100)";
            }
        }
       
    
    
    
        if (count($errorMessage) == 0) { // si il ny a aucune érreur le formulaire disparait
            $showForm = false;
        }
        $dossier_photos = "gallery/"; // "photos/ correspond à l'endroit ou les imgages seront stocker
        $uploadOk = true;
        $goodImage = "";
        $existImage = "";
        $bigImage = "";
        $extensionImage = "";
        $notSendImage = "";
        $sendImage = "";
        $erreurImage = "";
        $notImage = "";
        
        
        if (isset($_FILES["fichier"])) {
          $target_file = $dossier_photos . basename(uniqid().$_FILES["fichier"]["name"]);//uniqid() permet d'envoyer le même nom pour une image
          $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
          
          if (isset($_POST["submit"]) && $_FILES["fichier"]["error"] != 4) {
            $check = getimagesize($_FILES["fichier"]["tmp_name"]);
            
            if ($check !== false) {
              $goodImage = "C'est bien une image - " . $check["mime"] . ".";
              if ($check["mime"] == "image/jpeg" || $check["mime"] == "image/jpg" || $check["mime"] == "image/png" || $chek["mime"] == "image/GIF") { //on vérifie la racine du fichier
                if (file_exists($target_file)) {
                  $existImage = "Désolé, le nom de l'image existe déjà.";
                  $uploadOk = false;
                }
        
                // Vérification de la taille
                if (($_FILES["fichier"]["size"]) > 100000) {
                  $bigImage = "l'image dépasse 1mo.";
                  $uploadOk = false;
                }
        
                // Vérification de la taille
                if (($_FILES["fichier"]["size"]) > 100000) {
                  $bigImage = "l'image dépasse 1mo.";
                  $uploadOk = false;
                }
        
                //Vérification extension de l'image
                if (
                  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                  && $imageFileType != "gif"
                ) {
                  $extensionImage = "Désolé les images sont uniquement autorisées en JPG, JPEG, PNG & GIF.";
                  $uploadOk = false;
                }
        
                // Vérification si l'image a pu être envoyé
                if ($uploadOk == false) {
                  $notSendImage = " elle n'a pas été envoyé.";
                  // Vérification image envoyé
                } else {
                  if (move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file)) {
                    $sendImage = "Votre image "  . htmlspecialchars(basename($_FILES["fichier"]["name"])) . "  a bien été envoyé.";
                  } else {
                    $erreurImage = "Désolé il y a eu une erreur de téléchargement de votre image.";
                  }
                }
              }
              $uploadOk = true;
            } else {
              $notImage =  "Ce n'est pas une image.";
              $uploadOk = false;
            }
          }
        }
        ?>
        
        <?php
          // compteur d'images
            $MonRepertoire = "gallery"; //Répertoire contenant
           
          


            
            if(empty($errorMessage)){

              // Création de l'objet user
              $addItemsObjet = new nc_items;
            
              // Création d'un tableau 
              $addUser = [
                'selectCategory' => htmlspecialchars($_POST['selectCategory']),
                'titleAd' => htmlspecialchars($_POST['titleAd']),
                'description' => htmlspecialchars($_POST['description']),
                'price' => htmlspecialchars($_POST['price'])
              ];
            
              if($addItemsObjet->addItems($additems))
              {
                $errorMessage['additems'] = 'Félicitation votre compte à été crée';
                header('location:index.php');
              } else {
                $errorMessage['additems'] = 'Erreur de connexion';
              }
            
            } 






        
            }



           

    
    
?>
