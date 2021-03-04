
<?php
require_once "../controller/navBar.controller.php";
require_once "../controller/annonce.controller.php";
require_once "../controller/deposeAnnonce.controller.php";
?>




<!doctype html>
<html lang="fr">

<head>
    <title>Dépose annonce</title>
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

    <div class="container mt-">
        <div class="site-title">
            <h1>Homecamping.com</h1>
            <p>Déposer votre annonce</p>
        </div>
    </div>



    <!-- telecharger une image -->

    <div class="formAnnonce">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-8">
                    <img class="imgFondAnnonce " src="/assets/img/van.png" alt="">
                </div>
                <div class="col-4">
                    <?php if ($showForm) { ?>
                        <form class="form" method="POST" action="annonce.php" name="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="selectCategory"></label>
                                <select class="form-control" name="selectCategory" id="selectCategory">
                                    <option value="0" > Choisir une catégorie</option>
                                    <?php
                                    foreach ($selectCategory as $key => $value) { ?>
                                        <option value="<?= $key ?>"<?= isset($_POST["selectCategory"]) && $_POST["selectCategory"] == $key ? "selected" : ""  ?>><?= $value ?>
                                    </option>
                                       
                                    <?php } ?>
                                   
                                </select>
                                <div class="text-danger"><span><?= isset($errorMessage["selectCategory"]) ? $errorMessage["selectCategory"] : "" ?></span>
                                        </div>
                           

                           
                                <div class="mt-3 ">
                                    <label for="titleAd"></label>
                                    <input type="text" class="form-control" class="w-75" id="titlejkjk" placeholder="Titre de l'annonce" name="titleAd" aria-describedby="titleAD" value="<?= isset($_POST["titleAd"]) ? htmlspecialchars($_POST["titleAd"]) : ""  ?>">
                            </div>
                            <div class=" text-danger">
                                    <span><?= isset($errorMessage["titleAd"]) ? $errorMessage["titleAd"] : "" ?></span>
                                </div>
                           

                                <div class="mt-3 ">
                                    <label for="description"></label>
                                    <textarea name="description" class="w-75" id="description" placeholder="Description de votre produit" value="<?= isset($_POST["description"]) ? htmlspecialchars($_POST["description"]) : "" ?>" ></textarea>
                                </div>
                                <div class="text-danger">
                                    <span><?= isset($errorMessage["description"]) ? $errorMessage["description"] : "" ?></span>
                                </div>
                           


                                <div class="mt-3">
                                    <label for="price"></label>
                                    <input type="text" class="w-75" name="price" id="price" placeholder="Prix" value="<?= isset($_POST["price"]) ? htmlspecialchars($_POST["price"]) : "" ?>">
                                </div>
                                <div class="text-danger">
                                    <span><?= isset($errorMessage["price"]) ? $errorMessage["price"] : "" ?></span>
                                </div>
                           

                            
                                <div class="mt-3 ml-1">
                                    <input type="hidden" name="fichier" value="100000" />
                                    <input type="file" name="numberOne" />
                                    <input type="file" name="numberTwo" />
                                    <input type="file" name="numberThree" />
                                    <div class="mt-3">
                                    </div>
                                </div>
                           

                            <button type="submit" name="submit" class="btn btn-success mt-2 mb-3">Envoyer <i class="fas fa-upload"></i></button>

                        </form>
                    <?php } else { ?>

                        

                        <div class="border border-dark text-center ">
                            <p class="font-weight-bold">Récapitulatif</p>
                            
                            <p>Catégorie: <?= htmlspecialchars($_POST["selectCategory"]) ?></p>
                            <p>Titre: <?= htmlspecialchars($_POST["titleAd"]) ?></p>
                            <p>Description: <?= htmlspecialchars($_POST["description"]) ?></p>
                            <p>Prix: <?= htmlspecialchars($_POST["price"]) ?></p>
                        

                        <?php } ?>

                        </div>
                </div>
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


