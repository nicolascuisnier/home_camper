<?php

require_once "../models/database.php";

class nc_items extends DataBase
{
    // Création de la méthode
    public function addItems($additems)
    {
        //Création de la requete
        $query = "INSERT INTO `nc_items` (`items_title`, `items_description`, `items_price`, `items_pictureOne`, `items_picturetwo`, `items_pictureThree`, `user_id`, `category_id`)
        VALUES (:items_title, :items_description, :items_price, :items_pictureOne, :items_pictureTwo, :items_pictureThree, :user_id , :category_id)";

        //Preparation de la requete
        $additemsQuery = $this->DataBase->prepare($query);

        // je bind la value des marqueurs nominatif
        $additemsQuery->bindValue(':items_title', $additems['items_title'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':items_description', $additems['items_description'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':items_price', $additems['items_price'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':items_pictureOne', $additems['items_pictureOne'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':items_pictureTwo', $additems['items_pictureTwo'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':items_pictureThree', $additems['items_pictureThree'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':user_id', $additems['user_id'], PDO::PARAM_STR);
        $additemsQuery->bindValue(':category_id', $additems['category_id'], PDO::PARAM_STR);
        


        //Vérification de la requete

        if($additemsQuery->execute()){
            return $additemsQuery->fetchAll();
        }else{
            return false;
        }

    }














}




