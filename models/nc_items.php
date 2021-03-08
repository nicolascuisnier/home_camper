<?php

require_once "../models/database.php";

class nc_items extends DataBase
{
    // Création de la méthode
    public function addItems(array $additems)
    {
        //Création de la requete
        $query = "INSERT INTO `nc_items` (`items_title`, `items_description`, `items_price`, `items_pictureOne`, `items_picturetwo`, `items_pictureThree`, `user_id`, `category_id`, `items_validate`)
        VALUES (:items_title, :items_description, :items_price, :items_pictureOne, :items_pictureTwo, :items_pictureThree, :user_id , :category_id, :items_validate)";

        //Preparation de la requete
        $additemsQuery = $this->DataBase->prepare($query);

        // je bind la value des marqueurs nominatif
        $additemsQuery->bindValue(':items_title', $additems['titleAd'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':items_description', $additems['description'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':items_price', $additems['price'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':items_pictureOne', $additems['items_pictureOne'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':items_pictureTwo', $additems['items_pictureTwo'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':items_pictureThree', $additems['items_pictureThree'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':user_id', $_SESSION['nc_user']['id'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':category_id', $additems['selectCategory'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':items_validate', 0, PDO::PARAM_BOOL);

        //Vérification et execution de la requete
        if ($additemsQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }






    // affichage des items
    public function displayItems(int $displayItems)
    {
        $query = "SELECT `items_title`, `user_mail`, `items_id`, `items_description`, `items_price`, `items_pictureOne`, `items_pictureTwo`, `items_pictureThree`, `category_id`,`items_validate` 
        FROM `home_camping2`. `nc_items` 
        INNER JOIN `nc_user` ON `nc_items`.`user_id` = `nc_user`.`user_id` 
        WHERE `category_id` = :id AND `items_validate` = 1";

        $displayItemsQuery = $this->DataBase->prepare($query);
        $displayItemsQuery->bindValue(':id', $displayItems, PDO::PARAM_INT);

        if ($displayItemsQuery->execute()) {

            $result = $displayItemsQuery->fetchAll();
            return $result;
        } else {
            return false;
        }
    }





    // Description des items
    public function descriptItems(int $descriptItems)
    {
        $query = "SELECT `items_title`, `items_id`, `items_description`, `items_price`, `items_pictureOne`, `items_pictureTwo`, `items_pictureThree`, `category_id` 
      FROM `home_camping2`.`nc_items` 
      INNER JOIN `nc_user` ON `nc_items`.`user_id` = `nc_user`.`user_id` 
      WHERE `items_id` = :id";

        $descriptItemsQuery = $this->DataBase->prepare($query);
        $descriptItemsQuery->bindValue(':id', $descriptItems, PDO::PARAM_INT);

        if ($descriptItemsQuery->execute()) {

            $result = $descriptItemsQuery->fetchAll();
            return $result;
        } else {
            return false;
        }
    }





    public function valideItems()
    {
        $query = "UPDATE `nc_items` SET `items_validate` = 1 WHERE `items_id` = :id_items";
        $validItemsquery = $this->DataBase->prepare($query);
        $validItemsquery->bindValue(':items_id', PDO::PARAM_STR);


        if ($validItemsquery->execute()) {
            return true;
        } else {
            return false;
        }
    }



    /**
     * 
     * Méthode permetent de supprimer un items
     * 
     * return false
     */
    public function deleteAnnonce()
    {
        $query = "DELETE FROM `nc_items` WHERE `nc_items`.`items_id` = :items_id";
        $deleteAnnonceQuery = $this->DataBase->prepare($query);
        $deleteAnnonceQuery->bindValue(':items_id', PDO::PARAM_STR);

        if ($deleteAnnonceQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
