<?php
require_once "../controller/navBar.controller.php";
require_once "../controller/connexion.controller.php";
require_once "../controller/connexion.controller.php";
?>

<!doctype html>
<html lang="fr">

<head>
    <title>homecamping.com/connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="icon" type="image/png" sizes="500x500" href="/assets/img/fond.jpg">
  
</head>

<body>
<div class="container ">
  <div class="site-title">
    <h1>Homecamping.com</h1>
    <p>Espace connexion</p>
  </div>
</div>
  
    <div class="Connexion">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class=" mt-5 text-center" style="width: 25rem ">
                        <div class="card-body">
                            <h5 class="card-title">Bonjour!</h5>
                            <p class="card-text">
                            <p>Connectez-vous pour découvrir toutes nos fonctionnalités.</p>
                            <form method="POST" action="connexion.php">
                                <div class="form">
                                    <div class="form-group">
                                        <label for="mail">Adresse mail</label>
                                        <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" value="<?= isset($_POST['mail']) ? ($_POST['mail']) : "" ?>">
                                        <div class="text-danger">
                                    <span><?= isset($errorMessage["mail"]) ? $errorMessage["mail"] : "" ?></span>
                                    </div>
                                    </div>
                                   




                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                        <div class="text-danger">
                                    <span><?= isset($errorMessage["password"]) ? $errorMessage["password"] : "" ?></span>
                                    </div>
                                    </div>
                                    <div>
                                    </div>
                                    
                                    <button type="submit" name="submitButton" class="btn btn-primary mt-3 mb-3">Envoyer</button>
                            </form>
                        </div>
                    </div>
                    <a class="mt-5" href="Mot de pass">Mot de passe oublier</a>
                    <p>Envie de nous rejoindre ?<a href="creationdecompte.php">Crée un compte</a></p>
                </div>
            </div>
            <div class="col">
                <img class="imgFondConnexion" src="../assets/img/tenteblanche.jpg" alt="dessin de tente">
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