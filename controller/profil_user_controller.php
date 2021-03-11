<?php
require_once "../models/database.php";
require_once "../models/nc_user.php";
require_once "../models/nc_items.php";

$viewUserObjet = new nc_user;
$viewUserArray = $viewUserObjet->viewUser($_SESSION['nc_user']['id']);
