<?php
require_once "../models/database.php";
require_once "../models/nc_category.php";
require_once "../models/nc_items.php";

// var_dump($_FILES["fileNumberOne"],$_FILES["fileNumberTwo"],$_FILES["fileNumberTree"]);

$category = new nc_category;

$categoryArray = $category->selectCategory();


$selectCategory = [];
foreach ($categoryArray as $value) {
  $selectCategory[$value['category_id']] = $value['category_Name'];
}



$errorMessage = [];
$regexName = "/^[a-z A-Z]+$/";
$regexPrice = "[0-9]{1,}[.,]{0,1}[0-9]{0,2}";



$showForm = true;


if (isset($_POST["submit"])) {



  if (isset($_POST["selectCategory"])) {
    if (empty($_POST["selectCategory"])) {
      $errorMessage["selectCategory"] = "Merci de choisir une categorie";
    }
    if ($_POST["selectCategory"] == 0) {
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
    if (empty($_POST["price"])) {
      $errorMessage["price"] = "Veuillez renseigner un prix (ex= 100)";
    }
  }




  if (count($errorMessage) == 0) { // si il ny a aucune érreur le formulaire disparait
    $showForm = false;
  }
  $dossier_photos = "../assets/gallery/"; // "gallery/ correspond à l'endroit ou les imgages seront stocker
  $uploadOk = true;
  $goodImage = "";
  $extensionImage = "";
  $notSendImage = "";
  $sendImage = "";
  $erreurImage = "";
  $notImage = "";
  $newImageNameFileList = array();

  if (count($errorMessage) == 0) {
    foreach ($_FILES as $file) {
      $newImageNameFile = basename(uniqid() . $file["name"]);
      $target_file = $dossier_photos . $newImageNameFile; //uniqid() permet d'envoyer le même nom pour une image
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

      if (isset($_POST["submit"]) && $file["error"] != 4) {
        $check = getimagesize($file["tmp_name"]);


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
          if (move_uploaded_file($file["tmp_name"], $target_file)) {
            $sendImage = "Votre image "  . htmlspecialchars(basename($file["name"])) . "  a bien été envoyé.";
          } else {
            $erreurImage = "Désolé il y a eu une erreur de téléchargement de votre image.";
          }
        }

        $uploadOk = true;
        $newImageNameFileList[] = $newImageNameFile;
      } else {
        $notImage =  "Ce n'est pas une image.";
        $uploadOk = false;
      }
    }
  }


  if (empty($errorMessage)) {

    // Création de l'objet user
    $addItemsObjet = new nc_items;
    var_dump(count($newImageNameFileList));

    // Création d'un tableau 
    $additems = [
      'selectCategory' => htmlspecialchars($_POST['selectCategory']),
      'titleAd' => htmlspecialchars($_POST['titleAd']),
      'description' => htmlspecialchars($_POST['description']),
      'price' => htmlspecialchars($_POST['price']),
      'items_pictureOne' => $newImageNameFileList[0],
      'items_pictureTwo' => count($newImageNameFileList) >= 2 ?  $newImageNameFileList[1] : NULL,
      'items_pictureThree' => count($newImageNameFileList) >= 3 ?  $newImageNameFileList[2] : NULL
    
    ];

    if ($addItemsObjet->addItems($additems)) {
      $errorMessage['additems'] = 'Félicitation votre annonce a bien été crée';
      // header('location:/index.php');

    } else {
      $errorMessage['additems'] = 'Erreur lors de la création de l\'annonce !! ';
    }
  }

  if (count($errorMessage) == 0) { // si il ny a aucune érreur le formulaire disparait
    $showForm = false;
  }
}
