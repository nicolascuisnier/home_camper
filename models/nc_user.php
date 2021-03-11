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

        //Vérification de la requete et execution
        if ($addUserQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }






    public function checkpassword($userMail, $password)
    {
        $query = 'SELECT * FROM home_camping2.nc_user WHERE user_mail = :user_mail';
        $userMailQuery = $this->DataBase->prepare($query);
        $userMailQuery->bindValue(':user_mail', $userMail);

        if ($userMailQuery->execute()) {
            $userInfos = $userMailQuery->fetch();
            $userPassword = $userInfos['user_password'];
            if (password_verify($password, $userPassword)) {

                $_SESSION['nc_user'] = [
                    'id' => $userInfos['user_id'],
                    'name' => $userInfos['user_mail'],
                    'role' => $userInfos['nc_roles'],
                ];

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }




    /**
     * Méthode permettant d'obtenir la liste de toutes les annonces par utilisateur
     * 
     * 
     * @return array
     */

    //affichache des annonces coté admin
    public function viewAnnonce(int $validateValue)
    {

        $query = "SELECT `nc_user`.`user_id`, `user_mail`, `items_id`, `items_title`, `items_price`, `items_pictureOne`, `items_pictureTwo`, `items_pictureThree`, `category_name`, `items_validate`  
    FROM `nc_user` INNER JOIN `nc_items` ON `nc_user`.`user_id` = `nc_items`.`user_id` INNER JOIN nc_category ON `nc_items`.`category_id` = `nc_category`.`category_id` WHERE items_validate = " . $validateValue;

        $viewAnnonceQuery = $this->DataBase->prepare($query);

        $viewAnnonceQuery->execute();
        return $viewAnnonceQuery->fetchAll();
    }




    /**
     * 
     * Methode permettant d'afficher le profil de user
     * 
     * 
     * @param string je recupére toutes les items du user
     * 
     * 
     */
    public function viewUser(int $validateValue)
    {

        $query = " SELECT `nc_user`.`user_id`,`user_name`, `user_mail`, `items_id`, `items_title`, `items_description`, `items_price`, `items_pictureOne`, `items_pictureTwo`, `items_pictureThree`, `category_name`, if (`items_validate`= 1 ,'oui','non')  AS `items_validate`
        FROM `nc_user` INNER JOIN `nc_items` ON `nc_user`.`user_id` = `nc_items`.`user_id` INNER JOIN nc_category ON `nc_items`.`category_id` = `nc_category`.`category_id` WHERE `nc_user`.`user_id`= :user_id  ORDER BY `items_id` DESC";

        $viewAnnonceQuery = $this->DataBase->prepare($query);
        $viewAnnonceQuery->bindValue(':user_id', $validateValue);

        $viewAnnonceQuery->execute();
        return $viewAnnonceQuery->fetchAll();
    }


    public function getDetailUser(string $idUser)
    {
        $query = "SELECT * FROM `nc_user` WHERE `user_id` = :user_id";

        $getDetailUserQuery = $this->DataBase->prepare($query);
        $getDetailUserQuery->bindValue(':user_id', $idUser, PDO::PARAM_STR);

        if($getDetailUserQuery->execute())
        {
            return $getDetailUserQuery->fetch();
        } else {
            return false;
        }

    }



}
