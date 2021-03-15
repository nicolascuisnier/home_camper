<?php
session_start();
var_dump($_SESSION);

?>

<!doctype html>
<html lang="fr">
  <head>
    <title>détail user</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
  <body>
  <?php
  include "../view/include/navbar.php";
?>
<div class="header"></div> 
  <div class="container mt-">
    <div class="site-title">
      <h1>Homecamping</h1>
      <h3>Vos informations</h>
    </div>
  </div>
     <div class="container">
     <form class="align-items-center">
  <div class="form-group  w-50">
    <label for="login">Nom d'utilisateur</label>
    <input type="text"<?= $user['user_name'] ?> class="form-control" id="login">
  </div>
  <div class="form-group w-50">
    <label for="mail">Votre mail</label>
    <input type="mail" class="form-control" id="mail">
  </div>
  <div class="form-group w-50">
    <label for="password">Modifier votre mot de passe </label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="form-group w-50">
    <label for="password">Confirmer votre nouveau mot de passe</label>
    <input type="password" class="form-control" id="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Modifier</button>
  <button type="submit" class="btn btn-danger">Annuler</button>
</form>






     </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>