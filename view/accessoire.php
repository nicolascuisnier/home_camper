<?php
  require_once "../controller/navBar.controller.php";
  require_once "../controller/materiel.controller.php";
  ?>

<!doctype html>
<html lang="fr">
  <head>
    <title>www.homecamping.com/materiel</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="icon" type="image/png" sizes="500x500" href="/assets/img/fond.jpg">
</head>

  <body>
<div class="container mt-">
  <div class="site-title">
    <h1>Homecamping.com</h1>
    <p>Annonce Accessoire</p>
  </div>
</div>

<div class="container">
  <div class="mb-3 mt-3" style="max-width: 600px h-5 ">
    <div class="row no-gutters">
      <div class="col-sm">
        <img src="/assets/img/duvet.jpg" class="card-img" alt="caravane ">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Duvet</h5>
          <p>Duvet 1 personne </p>
          <p>prix 8 euros</p>
          <p>Contacter le vendeur</p>
        </div>
      </div>
    </div>
  </div>

  <div class="mb-3 mt-3" style="max-width: 600px h-5 ">
    <div class="row no-gutters">
      <div class="col-sm">
        <img src="/assets/img/opinel.jpg" class="card-img" alt="caravane">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Coteau</h5>
          <p>Opinel </p>
          <p>prix 10 euros</p>
          <p>Contacter le vendeur</p>
        </div>
      </div>
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