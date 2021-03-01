<?php
require_once "../models/database.php";

class nc_category extends DataBase
{

    public function selectCategory()
    {
        $query = "SELECT * FROM home_camping.nc_category";

        $queryObj = $this->DataBase->query($query);
         
        $result = $queryObj->fetchAll();
        return $result;
    }

}