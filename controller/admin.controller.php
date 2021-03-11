<?php
require_once "../models/database.php";
require_once "../models/nc_user.php";
require_once "../models/nc_items.php";

// création d'un tableau contenant toutes les annonces
$viewAnnonceObjet = new nc_user;
$viewAnnoncetoValidateArray = $viewAnnonceObjet->viewAnnonce(0);
$viewAnnonceValidatedArray = $viewAnnonceObjet->viewAnnonce(1);












