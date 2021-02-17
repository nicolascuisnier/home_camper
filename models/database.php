<?php
// creation d'une class
class DataBase {

   protected $dataBase;

    public function __construct()
    {
        // nous utilison try and catch pour obtenir un message d'erreur en cas de non connexion
        try
{
	// On se connecte à MySQL
	$this->dataBase = new PDO('mysql:host=localhost;dbname=home_camping;charset=utf8', 'pdo', 'pdopdo');
    
}
catch(Exception $errorMessage)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$errorMessage->getMessage());
}

    }
                               
    
}

echo("bonjour");

// try
// {
// 	$bdd = new PDO('mysql:host=localhost;dbname=home_camping;charset=utf8', 'pdo', 'pdopdo');
   
    
// }
// catch (Exception $e)
// {
//         die('Erreur : ' . $e->getMessage());
// }


// ?>

