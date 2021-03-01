<?php
// creation d'une class
class DataBase {

   protected $DataBase;

    public function __construct()
    {
        // nous utilison try and catch pour obtenir un message d'erreur en cas de non connexion
        try
{
	// On se connecte à MySQL
	$this->DataBase = new PDO('mysql:host=localhost;dbname=home_camping2;charset=utf8', 'pdo', 'pdopdo');
    
}
catch(Exception $errorMessage)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$errorMessage->getMessage());
}

    }
                               
    
}


