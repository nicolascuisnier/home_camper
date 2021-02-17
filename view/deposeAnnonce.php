<?php
require_once "../controller/navBar.controller.php";
require_once "../controller/deposeAnnonce.controller.php";

?>



<!doctype html>
<html lang="fr">

<head>
  <title>Dépose annonce</title>
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


  <div class="container mx-auto">
    <div class="row text-center ">
      <div class="col-6-sm mx-auto">
        <h1>Bienvenue!</h1>
        <p>Pour déposé une annonce connecté vous!</p>
        <div class=" mb-3 " style="max-width: 1000px;">
          <div class="row no-gutters ">
            <div class="col-md-4">

            </div>
            <div class="col-md-20">
              <div class="card-body">


                <form  method="POST" action="deposeAnnonce.php">
                  <div class="form-group">
                    <label for="mail">Adresse Mail</label>
                    <input type="text" class="form-control" id="mail" name="mail" aria-describedby="mail" value="<?= isset($_POST['mail']) ? isset($_POST['mail']) :"" ?>">
                    <div class="text-danger">
                      <span><?= isset($errorMessage["mail"]) ? $errorMessage["mail"] :"" ?></span>
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" name="password" id="password" value="<?=isset($_POST['password']) ? isset($_POST['password']) :"" ?>">
                    <div class="text-danger">
                      <span><?= isset($errorMessage["password"]) ? $errorMessage["password"] :"" ?></span>
                    </div>
                  </div>
                  <div class="mt-5">
                    <a href="annonce.php"><button type="submit" class="btn btn-primary">se connecter</button></a>
                  </div>
                  <div class="mt-5">
                    <p>Pas encore de compte?<a href="creationdecompte.php">cliquer ici</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 ml-5">
        <img src="../assets/img/campfeu.jpg" alt="">
      </div>
    </div>
  </div>


  <?php
  require_once "../controller/footer.controller.php";
  ?>

  <script src="/assets/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>