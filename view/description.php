<?php
session_start();
require_once "../controller/navBar.controller.php";
require_once "../controller/description.controller.php";
require_once "../controller/caravane.controller.php";



?>


<!doctype html>
<html lang="fr">

<head>
    <title>Description </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="icon" type="image/png" sizes="500x500" href="../assets/img/fond.jpg">
</head>

</head>

<body>
    <!-- <div class="header"></div>  -->
    <div class="Text-center mt-5">

    </div>
    <?php
    foreach ($descriptCaravane as $caravane)
        $imageGallery  = [
            'pictureOne' => $caravane["items_pictureOne"],
            'pictureTwo' => $caravane["items_pictureTwo"],
            'picturethree' => $caravane["items_pictureThree"]
        ]; { ?>
        <h1 class="text-center">Descripiton de l'annonce <?= $caravane['items_title'] ?></h1>
        <div class="container">
            <h1 class="font-weight-light text-center font-weight-bold  text-lg-left mt-4 mb-0">Photos de l'annonce</h1>
            <div class="row text-center text-lg-left">
               <?php
                foreach ($imageGallery as $image) {
                    if ($image == NULL) {
                        continue;
                    }
                ?>
                    <div class="photo-opacity ">
                        <img src="../assets/gallery/<?= $image ?>" class="card_Img card-img" style="display:inline-block; width: 900px" alt="caravane ">
                        </a>
                    </div>
                <?php   } ?>
            </div>
        </div>
        <hr>
        <h1 class="font-weight-light text-center font-weight-bold  mt-4 mb-2 ">Prix</h1>
        <p class="text-center"><?= $caravane['items_price'] ?> Euros</p>
        <hr>
        <h1 class="font-weight-light text-center font-weight-bold   mt-4 mb-5 ">Contacter le vendeur</h1>



    <!-- <?php } ?> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>