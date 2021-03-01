  
<?php
    $errorMessage = [];
    $regexName = "/^[a-z A-Z]+$/";
    $regexPrice = "[0-9]{1,}[.,]{0,1}[0-9]{0,2}";
    
    $selectCategory = [
    
        1 => "caravane",
        2 => "camping-car",
        3 => "van",
        4 => "accessoires"
    
    ];
    
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
    }
    
    
?>