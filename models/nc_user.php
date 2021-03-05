<?php
require_once "../models/database.php";

class nc_user extends DataBase
{

    // Création de la fonction avec comme paramètre un array $addUser
    public function addUser(array $addUser)
    {
        // Création de la requete
        $query = 'INSERT INTO `nc_user` (`user_name`, `user_mail`, `user_password`) VALUES (:user_name, :user_mail, :user_password)';

        // Préparation de la requete
        $addUserQuery = $this->DataBase->prepare($query);

        // Je bind la value des marqueurs nominatif
        $addUserQuery->bindValue(':user_name', $addUser['user_name'], PDO::PARAM_STR);
        $addUserQuery->bindValue(':user_mail', $addUser['user_mail'], PDO::PARAM_STR);
        $addUserQuery->bindValue(':user_password', $addUser['user_password'], PDO::PARAM_STR);
        // $addUserQuery->bindValue(':user_role', '', PDO::PARAM_STR);

        //Vérification de la requete et execution
        if ($addUserQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

    

    public function checkpassword($userMail, $password)
    {
        //var_dump($userMail, $password);

        $query = 'SELECT * FROM home_camping2.nc_user WHERE user_mail = :user_mail';
        $userMailQuery = $this->DataBase->prepare($query);
        $userMailQuery->bindValue(':user_mail', $userMail);

        if ($userMailQuery->execute()) {
            //$userMailQuery->debugDumpParams();
           
            $userInfos = $userMailQuery->fetch();
            $userPassword = $userInfos['user_password'];
            if (password_verify($password, $userPassword)) {
               
                $_SESSION['nc_user'] = [
                'id' => $userInfos['user_id'],
                'name' => $userInfos['user_mail'],
                ]; 

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }



// //  detailUser
//     public function detailUser($userMail, $password)
//     {
//         $query = "SELECT * FROM nc_user";
//         $detailUserObj = $this->DataBase->prepare($query);

//         if($detailUserObj->execute()){
//             return $detailUserObj->fetch();;
//         } else {
//             return false;
//         }
//     }


/**
 * Méthode permettant d'obtenir la liste de toutes les annonces par utilisateur
 * 
 * 
 * @return array
 */

    //affichache des annonces coté admin
    public function viewAnnonce()
    {

    $query = "SELECT `nc_user`.`user_id`, `user_mail`, `items_id`, `items_title`, `items_price`, `items_pictureOne`, `items_pictureTwo`, `items_pictureThree`, `category_name`, `items_validate`  
    FROM `nc_user` INNER JOIN `nc_items` ON `nc_user`.`user_id` = `nc_items`.`user_id` INNER JOIN nc_category ON `nc_items`.`category_id` = `nc_category`.`category_id` ";

    $viewAnnonceQuery = $this->DataBase->prepare($query);
   
    $viewAnnonceQuery->execute();
     return $viewAnnonceQuery->fetchAll();

}



    public function getDetailsUser(string $idUser)
    {
        $query = "SELECT `nc_user`.`user_id`, `user_mail`, `items_title`,`items_id`, `items_price`, `items_pictureOne`, `items_pictureTwo`, `items_pictureThree`, `category_name`, `items_validate`  
        FROM `nc_user` 
        INNER JOIN `nc_items` ON `nc_user`.`user_id` = `nc_items`.`user_id` 
        INNER JOIN nc_category ON `nc_items`.`category_id` = `nc_category`.`category_id`
        WHERE `nc_user`.`user_id` = :nc_user.user_id";

        $getDetailsUserQuery= $this->DataBase->prepare($query);

        $getDetailsUserQuery->bindValue(':nc_user.user_id', $idUser, PDO::PARAM_STR);

        if($getDetailsUserQuery->execute())
        {
            return $getDetailsUserQuery->fetch();
        } else {
            return false;
        }


    }

}
