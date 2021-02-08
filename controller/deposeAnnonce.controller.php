<?php
$dossier_photos = "../gallery/"; // "photos/ correspond à l'endroit ou les imgages seront stocker
$uploadOk = true;
$goodImage = "";
$existImage = "";
$bigImage = "";
$extensionImage = "";
$notSendImage = "";
$sendImage = "";
$erreurImage = "";
$notImage = "";


if (isset($_FILES["file[0]"])) {
  $target_file = $dossier_photos . basename(uniqid().$_FILES["file[0]"]["name"]);//uniqid() permet d'envoyer le même nom pour une image
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  
  if (isset($_POST["submit"]) && $_FILES["file[0]"]["error"] != 4) {
    $check = getimagesize($_FILES["file[0]"]["tmp_name"]);
    
    if ($check !== false) {
      $goodImage = "C'est bien une image - " . $check["mime"] . ".";
      if ($check["mime"] == "image/jpeg" || $check["mime"] == "image/jpg" || $check["mime"] == "image/png" || $chek["mime"] == "image/GIF") { //on vérifie la racine du fichier
        if (file_exists($target_file)) {
          $existImage = "Désolé, le nom de l'image existe déjà.";
          $uploadOk = false;
        }

        // Vérification de la taille
        if (($_FILES["file[0]"]["size"]) > 100000) {
          $bigImage = "l'image dépasse 1mo.";
          $uploadOk = false;
        }

        // Vérification de la taille
        if (($_FILES["file[0]"]["size"]) > 100000) {
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
          if (move_uploaded_file($_FILES["file[0]"]["tmp_name"], $target_file)) {
            $sendImage = "Votre image "  . htmlspecialchars(basename($_FILES["file[0]"]["name"])) . "  a bien été envoyé.";
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

<!-- <?php
  // compteur d'images
    $MonRepertoire = "gallery"; //Répertoire contenant
    $scanRepertoire =  scandir($MonRepertoire); //scan le répertoire et met les fichier qu'il y trouve dedans
    $nbreImg = count($scanRepertoire)-2;
  
?> -->