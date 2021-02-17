<?php
require_once "../controller/navBar.controller.php";
require_once "../controller/creationcompte.controller.php";
?>

<!doctype html>
<html lang="fr">

<head>
  <title>www.homecamping.com/création de compte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/style.css">
  <link rel="icon" type="image/png" sizes="500x500" href="/assets/img/fond.jpg">
</head>

<body>
  <div class="container mt-">
    <div class="site-title">
      <h1>Homecamping.com</h1>
      <p>Déposer une annonce</p>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col border border-dark shadow text-center">


        <form class="creCompte" method="POST" action="creationdecompte.php">
          <div class="form-group   w-100">
            <label for="login">Non d'utilisateur</label>
            <input type="text" name="login" class="form-control" id="login" value="<?= isset($_POST["login"]) ? htmlspecialchars($_POST["login"]) : "" ?>">
            <div class="text-danger">
              <span><?= isset($errorMessage["login"]) ? $errorMessage["login"] : "" ?></span>
            </div>
          </div>



          <div class="form-group w-100 ">
            <label for="mail">Votre mail</label>
            <input type="text" name="mail" class="form-control" id="mail" value="<?= isset($_POST["mail"]) ? htmlspecialchars($_POST["mail"]) : "" ?>">
            <div class="text-danger">
              <span><?= isset($errorMessage["mail"]) ? $errorMessage["mail"] : "" ?></span>
            </div>
          </div>


          <div class="form-group w-100">
            <label for="password">Mot de passe</label>
            <div class="text-danger">
              <span><?= isset($errorMessage["password"]) ? $errorMessage["password"] : "" ?></span>
            </div><input type="password" name="password" class="form-control" id="password" value="<?= isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : "" ?>">
          </div>


          <button type="submit" class="btn btn-primary mb-3">Envoyer</button>
          <div class="mt-5">
            <p>En créant mon compte je reconnais avoir lu et accepté les Conditions Générales de Vente et les Conditions Générales d‘Utilisation, et je confirme être âgé d’au moins 18 ans.</p>
          </div>
        </form>
      </div>

      <div class="col ml-5">
        <img src="../assets/img/vanrouge.jpg" alt="">
      </div>
    </div>
  </div>

  <?php
  require_once "../controller/footer.controller.php";
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>