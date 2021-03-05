<?php
session_start();


?>

<!doctype html>
<html lang="fr">

<head>
  <title>homecamping.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/style.css">
  <link rel="icon" type="image/png" sizes="500x500" href="/assets/img/fond.jpg">
</head>

<body>

  <nav>
    
    <div class="textNav nav-bar ">
    <a class="nav-link text-white " id="Hautdepage"></a>
      <ul class="nav justify-content-center">
        <li class="nav-item ">
          <a class="nav-link text-light  " href="../index.php">Accueil</a>
        </li>
        <li>
          <a class="nav-link text-light "  href="#lesdernieresnews">Les dernières news</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light  " href="../view/caravane.php?id=1">Caravane</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="../view/campingcar.php?id=2">Camping-car</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="../view/van.php?id=3">Van</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="../view/accessoire.php?id=4">Accessoires</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light " type="submit" href="../view/connexion.php" value="">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light " href="../view/deposeAnnonce.php">Déposer une annonce</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../view/admin.php">Admin</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-white" href="../view/profil_user.php<?=$_GET['idUser']?>">Profil</a>
        </li> -->
      </ul>
    </div>
    </div>
  </nav>

  <header>
    <div class="container">
      <div class="site-title">
        <h1>Homecamping</h1>
      </div>
      <div class="content">
        <h1 class="textH1">Accueil</h1>
        <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/assets/img/campcarroussel.jpg" class="d-block w-100 h-75" alt="image d'un camping">
            </div>
            <div class="carousel-item">
              <img src="/assets/img/campcarroussel1.jpg" class="d-block w-100 h-75" alt="image d'un camping car">
            </div>
            <div class="carousel-item">
              <img src="/assets/img/campcarroussel2.jpg" class="d-block w-100 h-75" alt="image d'un camping car">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </header>
  
  <div class="position">
    <h2 class="news" ><i class="font-italic  fas fa-campground"></i> Les dernieres news</h2>
    <a class="nav-link text-white" style="right: 0px;" id="lesdernieresnews"></a>
  </div>
  <!-- article 1-->
  <div class="container-fluid">
    <div class="row">
      <div class="article col-sm mt-5 text-center border border-dark img-responsive shadow ml-2">
        <h1>Les nouvelles caravanes</h1>
        <p>Association originale…
          C’est en 1962 que Sud Aviation, constructeur de caravelles basé à Trignac, en Loire-Atlantique, décide de se diversifier dans la construction de caravanes.
          Un bureau d’études avec des dessinateurs riches de leur expérience aéronautique lance les premières caravanes Caravelair, associant déjà créativité et originalité…
          50 ans après un parcours ininterrompu d’innovations, Caravelair a su s’imposer comme le leader français de la Caravane et perpétue son savoir-faire en mettant à votre disposition des caravanes de qualité, pensées et construites pour vous.</p>

        <img class="imgArticle1" src="/assets/img/caravane 2021.jpg" alt="tente">
        <div class="mt-3">
          <img class="imgArticle1" src="/assets/img/caravane20211.jpg" alt="tente">
        </div>
      </div>

      <!-- article 2 -->
      <div class="article col-sm mt-5 text-center border border-dark img-responsive shadow ml-2">
        <h1>A la une</h1>
        <p>L’arrivée d’une gamme Poids-lourd premium dans le catalogue camping-cars 2021.</p>
        <p> L’intégral PRESTIGE DESIGN EDITION I790LC
          l’intégral PRESTIGE DESIGN EDITION I790LJ
          Ces 2 intégraux haut de gamme sont proposés sur châssis FIAT DUCATO 160CV – châssis AL-KO avec un PTAC de 4,5t et une charge utile de 850kg. Ces 2 intégraux « poids-lourd » vous permettront de voyager sans limite !
          Intérieurement, tout a été prévu pour voyager confortablement: grand salon face-face, très belle cuisine au design arrondi, meuble bar, espace pour grande TV dans le salon, 2nde TV et système audio indépendant dans la chambre, chauffage ALDE, réservoir d’eau de grande capacité.
          Pour en savoir plus,…
          cliquez ci-dessous pour voir la vidéo</p>
        <iframe width="300" height="315" src="https://www.youtube.com/embed/ARRMe_9g_8A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>


      <!-- article 3 -->
      <div class="article col-sm mt-5 text-center border border-dark img-responsive shadow ml-2 mr-2">
        <h1>Les Vans</h1>
        <p>Dans quelques heures, il prend la route pour six semaines et environ 6000 km. Direction la péninsule ibérique, dont il a prévu de parcourir tout le littoral à bord d’un Free 540 Blue Evolution. Une occasion en or de s’adonner à son sport favori – dans des eaux à 12-13° en cette saison – et nous régaler de ses images de rêve.
          « J’ai eu l’occasion de faire un road-trip en France cet été, au cours duquel j’ai découvert ce que j’appelle des pépites cachées, des coins de nature incroyables dont j’aurais voulu pouvoir profiter encore plus pleinement. J’ai trouvé terriblement frustrant de devoir rejoindre l’hôtel tous les soirs. En fourgon, cette fois, je vais pouvoir m’immerger absolument, vivre l’expérience à 100 %, sans rupture. »</p> <img class="imgArticle3" src="/assets/img/vanouvert.jpg" alt="camping car">
      </div>
    </div>
  </div>

    <a class="nav-link text-dark text-right"  href="#Hautdepage"><i class="fas fa-arrow-alt-circle-up" style="right:300px"></i> Haut de page</i></a>
 


  <?php
  require_once "controller/footer.controller.php"
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>