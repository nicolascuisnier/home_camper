<?php
session_start();
require_once "../controller/profil_user_controller.php";
require_once "../controller/detail_user.controller.php";
require_once "../controller/admin.controller.php";
$viewUserArray = getUserAnnonces();
$viewUserDetails = getUserDetails();
?>



<!doctype html>
<html lang="fr">

<head>
  <title>Profil utilisateur</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
  <?php
  include "../view/include/navbar.php";
  ?>
  <div class="contenaire  ">
    <div class="row ">
      <div class="col-sm">
        <div class="container border border-secondary shadow mt-5 p-4 col-8">
          <div class="text-center"><i class="fas fa-info-circle p-2 logo"></i></div>
          <p class="text-center text-uppercase mb-3 h3">Détails de mon profil</p>
          <hr>
          <p class="h5 text-center text-success"><?= $messages['updateUser'] ?? '' ?></p>
          <?php
          if(!$update){?>
          
          <form action="" method="POST" class="form">
         
            <div class="">
              <div class="form-group  w-100">
             
                <label for="login">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="login" name="login" value="<?= $viewUserDetails['user_name'] ?>">
              </div>
              <div class="form-group w-100">
                <label for="mail">Votre mail</label>
                <input type="mail" class="form-control" name="mail" id="mail" value="<?= $viewUserDetails['user_mail'] ?>">
              </div>
              <div class="form-group w-100">
                <label for="password">Modifier votre mot de passe </label>
                <input type="password" class="form-control" name="password" id="password">
              </div>
              <div class="form-group w-100">
                <label for="password">Confirmer votre nouveau mot de passe</label>
                <input type="password" class="form-control" name="verifPassword" id="password">
              </div>
              <div class="d-flex justify-content-center mr-2">
                <button type="submit" value="<?=$_SESSION['nc_user']['id'] ?>" name="updateBtn" class="boutton btn btn-success text-white">modifier mes informations</button>
                <button type="button" data-toggle="modal" data-target="#confirm-delete" class="boutton btn btn-danger text-white">supprimer mon compte</button>
              </div>
            </div>
          </form>
      <?php } ?>
        </div>




        <hr>
        <p class="text-center text-uppercase mb-3 h3">Détails de mes annonces</p>
        <table class="table table-sm table table-hover text-center ">
          <thead>
            <tr>
              <th scope="col">Titre de l'annonce</th>
              <th scope="col">Categorie</th>
              <th scope="col">Annonce validées</th>
              <th scope="col">Supprimer mon annonce</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($viewUserArray as $user) { ?>
              <tr>
                <td><?= $user['items_title'] ?></td>
                <td><?= $user['category_name'] ?></td>
                <td><?= $user['items_validate'] ?></td>
                <td><button type="button" data-toggle="modal" data-target="#deletItems<?=$user['items_id'] ?>" class="boutton  btn btn-danger text-center text-white">supprimer l'annonce</button></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- modal utilisateur suppression de compte -->
    <div class="modal" id="confirm-delete" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Suppression de votre compte</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-danger">voulez-vous vraiment suprimer votre compte?</br></p>
            <p class="text-danger">Toutes vos donées seront supprimer!!!</p>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="boutton btn btn-success text-white">Non</button>
            <form action="" method="POST">
              <button type="submit" value="<?= $_SESSION['nc_user']['id'] ?>" name="supBtn" class="boutton btn btn-danger text-white">Supprimer</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <?php
    foreach($viewUserArray  as $delItem){ ?>
    <div class="modal" id="deletItems<?=$delItem["items_id"]?>" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Suppression de votre annonces</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-danger">voulez-vous vraiment supprimer votre annonce? : <?=$delItem['items_title']?></br></p>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="boutton btn btn-success text-white">Non</button>
            <form action="../view/profil_user.php?id=<?=$delItem['user_id'] ?>" method="POST">
              <button type="submit" value="<?=$delItem["items_id"]?>" name="supItemsBtn" class="boutton btn btn-danger text-white">Supprimer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
 <?php   } ?>
  </div>
  </div>
  <?php
  include "../view/include/footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>