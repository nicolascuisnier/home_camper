<?php
session_start();
require_once "../controller/materiel.controller.php";
?>

<!doctype html>
<html lang="fr">

<head>
  <title>www.homecamping.com/accessoires</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/style.css">
  <link rel="icon" type="image/png" sizes="500x500" href="../assets/img/img.fond.jpg">
</head>

<body>
<?php
  include "../view/include/navbar.php";
?>

  <div class="header"></div>
  <div class="container mt-">
    <div class="site-title">
      <h1>Homecamping</h1>
      <p>Annonce Accessoire</p>
    </div>
  </div>

  <div class="container">
    <div class="mb-3 mt-3" style="max-width: 600px h-5 ">
      <div class="row no-gutters">

      <!-- création d'une boucle pour afficher les différents eléments de ma requette -->
        <?php
        foreach ($allMateriel as $materiel) { ?>
          <div class="col-sm-4">
            <img src="../assets/gallery/<?= $materiel["items_pictureOne"] ?>" class="card_Img card-img" alt="caravane ">
          </div>
          <div class="col-sm-8">
            <div class="text-Card card-body">
              <h5 class="card-title"><?= $materiel['items_title'] ?></h5>
              <p>prix <?= $materiel['items_price'] ?> euros</p>
              <a type="button" class="btn btn-dark text-white" href="../view/description.php?id=<?= $materiel['items_id'] ?>" value="<?= $materiel[$idCategory] ?>">+ d'info</a>
            </div>
          </div>
        <?php } ?>
      </div>
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