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
        $addUserQuery->bindValue(':user_password', $addUser['user_password'], PDO::PARAM_STR);
        $addUserQuery->bindValue(':user_role', '', PDO::PARAM_STR);

        //Vérification de la requete et execution
        if ($addUserQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    

    public function checkpassword($userMail, $password)
    {
        var_dump($userMail, $password);

        $query = 'SELECT * FROM home_camping.nc_user WHERE user_mail = :user_mail';
        $userMailQuery = $this->DataBase->prepare($query);
        $userMailQuery->bindValue(':user_mail', $userMail);

        if ($userMailQuery->execute()) {
            $userInfos = $userMailQuery->fetch();
            $userPassword = $userInfos['user_password'];
            if (password_verify($password, $userPassword)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }



//  detailUser
    public function detailUser()
    {
        $query = "SELECT * FROM nc_user";
        $detailUserObj = $this->DataBase->prepare($query);

        if($detailUserObj->execute()){
            return $detailUserObj->fetch();;
        } else {
            return false;
        }
    }
}
