<?php
require_once "../models/database.php";

class nc_user extends DataBase
{

    // Création de la fonction avec comme paramètre un array $addUser
public function addUser(array $addUser)
{
    // Création de la requete
    $query = 'INSERT INTO `nc_user` (`user_name`, `user_mail`, `user_password`,`user_role`) VALUES (:user_name, :user_mail, :user_password, :user_role)';

    // Préparation de la requete
    $addUserQuery = $this->DataBase->prepare($query);

    // Je bind la value des marqueurs nominatif
    $addUserQuery->bindValue(':user_name', $addUser['user_name'], PDO::PARAM_STR);
    $addUserQuery->bindValue(':user_mail', $addUser['user_mail'], PDO::PARAM_STR);
    $addUserQuery->bindValue(':user_password', $addUser['user_password'],PDO::PARAM_STR);
    $addUserQuery->bindValue(':user_role', '',PDO::PARAM_STR);

    //Vérification de la requete et execution
    if($addUserQuery->execute()){
        return true;
    } else{
        return false;
    }
  
}
}