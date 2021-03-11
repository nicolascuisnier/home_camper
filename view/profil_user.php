<?php
session_start();
require_once "../controller/profil_user_controller.php"
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
  <div class="row">

<div class="container border border-secondary shadow mt-5 p-4 col-8">

   <div class="text-center"><i class="fas fa-info-circle p-2 logo"></i></div>
   <p class="text-center text-uppercase mb-3 h3">Détails de votre compte</p>

   <hr>
   <table class="table table-sm table table-hover text-center ">
    <thead>
      <tr>

        <th scope="col">Titre de l'annonce</th>
        <th scope="col">Description</th>
        <th scope="col">Categorie</th>
        <th scope="col">Annonce validées</th>
        <th scope="col">Login</th>
        <th scope="col">Mot de passe</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
       
      </tr>


    </thead>
    <tbody>
      <?php foreach ($viewUserArray as $user) { ?>
        <tr>
          <td><?= $user['items_title'] ?></td>
          <td><?= $user['items_description'] ?></td>
          <td><?= $user['category_name'] ?></td>
          <td><?= $user['items_validate'] ?></td>
          <td><?= $user['user_name'] ?></td>
          <td><?= $user['user_mail'] ?></td>
          <td><a href="../view/detail_user.php?user_id=$_SESSION['id_user'] = $viewUserArray['user_mail']"><button type="button" name="detailuser" ><i class="fas fa-edit"></i></button></a></td>
          <td><a href="#"><button type="button" ><i class="fas fa-trash-alt"></i></button></a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
   <!-- <a type="button" class="btn btn-dark text-white" href="../view/description.php?id=">Modifier votre profil</a> -->
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