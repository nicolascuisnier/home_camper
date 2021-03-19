<?php
session_start();
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

  <?php
  include "../view/include/navbar.php";
  ?>
   <h3 class="text-center text-success" style="position:relative; top:50px"><?= $errorMessage['additems'] ?? "" ?></h3>
  <div class="header"></div>
  <!-- <a class="boutton btn btn-success text-white mt-3" href="../index.php" role="button">Retour a l'acceuil</a> -->
 
  <?php
  if (!$addItems) { ?>
  
    <?php
    if (isset($_SESSION['nc_user'])) {
      include "../view/include/formulaire_annonce.php";
    } ?>
  <?php } ?>

  
  <!-- <video src="../assets/img/video.mp4" class="h-5" controls autoplay> -->
 
 
  </div>
</div>
<!-- 
<?php
include "../view/include/footer.php";
?> -->
  <script src="/assets/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>