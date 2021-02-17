<?php
require_once "../controller/navBar.controller.php";
require_once "../controller/caravane.controller.php";
?>



<!doctype html>
<html lang="fr">

<head>
  <title>www.homecamping.com/caravane</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/style.css">
  <link rel="icon" type="image/png" sizes="500x500" href="../assets/img/fond.jpg">
</head>

<body>

  <div class="container mt-">
    <div class="site-title">
      <h1>Homecamping.com</h1>
      <p>Annonce caravane </p>
    </div>
  </div>

  <!-- card 1 -->
  <div class="container">
    <div class="bgCard  mb-3 mt-3" style="max-width: 300px h-5">
      <div class="row no-gutters">
        <?php
        foreach ($data_home_camping as $key => $value) { ?>
          <div class="col-sm-4">
            <img src="../data/images/<?= $data_home_camping[$key]["name_picture"] ?>" class="card_Img card-img" alt="caravane ">
          </div>
          <div class="col-sm-8">
            <div class="text-Card card-body">
              <h5 class="card-title"><?= $data_home_camping[$key]["title"] ?></h5>
              <p>prix <?= $data_home_camping[$key]["price"] ?> euros
              <p>
              <p>Nom du vendeur </br> <?= $data_home_camping[$key]["user"] ?></p>
              <button type="button" class="btn btn-dark text-white" data-toggle="modal" data-target="#staticBackdrop<?=$key?>">Descritpion</button>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>



  <!-- Modal 1 -->
  <?php
  foreach ($data_home_camping as $key => $value) { ?>
    <div class="modal fade" id="staticBackdrop<?=$key?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  
      <div class="modal-dialog">
 
        <div class="modal-content">
  
          <div class="modal-header">
   
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body">
            <img src="../data/images/<?= $data_home_camping[$key]["name_picture"] ?> " alt="caravane">
          </div>
          <ul>
            <li>Description </li><?= $data_home_camping[$key]["descrip"] ?>
            <li>Prix</li><?= $data_home_camping[$key]["price"] ?>
           
            
          </ul>
          <div class="modal-footer">
            <button class="btn btn-dark" type="button"><a class="text-white" href="mailto:nullepart@mozilla.org<?= $data_home_camping[$key]["user_mail"] ?>">Contacter le vendeur</a></button>
            <button type="button" class="btn btn-dark text-white" data-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>




    <?php
    require_once "../controller/footer.controller.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>