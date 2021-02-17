<?php

class nc_items extends DataBase
{
    public function getAllitems()
    {
        $query = 'SELECT items_title AS "titre", items_description AS "description", items_price AS "prix" FROM nc_items';
        $queryObjet =$this->dataBase->query($query);
        $result = $queryObjet->fetchAll();
        return $result;
    }
}