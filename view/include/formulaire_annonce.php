<body>

    <div class="container mt-">
        <div class="site-title">
            <h1>Homecamping.com</h1>
            <h3>Déposer votre annonce</h3>
        </div>
    </div>


    <!-- telecharger une image -->

    <div class="formAnnonce">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <img class="imgFondAnnonce " src="/assets/img/van.png" alt="">
                </div>
                <div class="col-sm-4">

                    <form class="form1" method="POST" action="deposeAnnonce.php" name="fichier" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="selectCategory"></label>
                            <select class="form-control" name="selectCategory" id="selectCategory">
                                <option value="0"> Choisir une catégorie</option>
                                <?php
                                foreach ($selectCategory as $key => $value) { ?>
                                    <option value="<?= $key ?>" <?= isset($_POST["selectCategory"]) && $_POST["selectCategory"] == $key ? "selected" : ""  ?>><?= $value ?>
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
                                <textarea name="description" class="w-75" id="description" placeholder="Description de votre produit" value="<?= isset($_POST["description"]) ? htmlspecialchars($_POST["description"]) : "" ?>"></textarea>
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
                                <input type="file" name="fileNumberOne" id="fileToUpload"/>
                                <input class="mt-3" type="file" name="fileNumberTwo"  />
                                <input class="mt-3"type="file" name="fileNumberThree" />
                                </div>
                            </div>
                            <button type="submit" name="submit" class="boutton btn btn-success  mb-3">Envoyer <i class="fas fa-upload"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="/assets/script.js"></script>
    
    <?php
    include "include/footer.php";
    ?>
    