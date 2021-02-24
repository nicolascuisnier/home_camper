<?php


?>


<!doctype html>
<html lang="fr">

<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/assets/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="header">
  </div>
  <div class="text-center">
    <h1>Espace administrateur</h1>
  </div>

  <div class="container ">
    <div class=" row ">
      <div class="col-sm-4">
        <div class="card shadow" style="width: 20rem;">
        <img src="../assets/img/plage.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Article numéro 1</h5>
            <hr>
            <div>
              <label for="article_title">Titre de l'article</label>
              <input type="text" name="article_title" id="article_title" placeholder="ex: Caravane">
            </div>

            <div>
              <label for="article_content" class="mt-3">description de l'article</label>
              <textarea name="article_content" id="article_content" cols="30" rows="10" placeholder="ex: Description"></textarea>
            </div>

            <div>
              <label for="article_img">Image</label>
              <input type="file" name="article_img" id="article_img">
            </div>

            <div>
              <label for="article_publication_date">Date de publication</label>
              <input type="date" name="article_publication_date" id="article_publication_date">
            </div>

            <div>
              <a href="#" type="submit" class="btn btn-primary mt-3">Valider</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
      <div class="card shadow" style="width: 20rem;">
          <img src="../assets/img/plage.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Article numéro 2</h5>
            <hr>
            <div>
              <label for="article_title">Titre de l'article</label>
              <input type="text" name="article_title" id="article_title" placeholder="ex: Caravane">
            </div>

            <div>
              <label for="article_content" class="mt-3">description de l'article</label>
              <textarea name="article_content" id="article_content" cols="30" rows="10" placeholder="ex: Description"></textarea>
            </div>

            <div>
              <label for="article_img">Image</label>
              <input type="file" name="article_img" id="article_img">
            </div>

            <div>
              <label for="article_publication_date">Date de publication</label>
              <input type="date" name="article_publication_date" id="article_publication_date">
            </div>

            <div>
              <a href="#" type="submit" class="btn btn-primary mt-3">Valider</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 ">
      <div class="card shadow" style="width: 20rem;">
          <img src="../assets/img/plage.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Article numéro 3</h5>
            <hr>
            <div>
              <label for="article_title">Titre de l'article</label>
              <input type="text" name="article_title" id="article_title" placeholder="ex: Caravane">
            </div>

            <div>
              <label for="article_content" class="mt-3">description de l'article</label>
              <textarea name="article_content" id="article_content" cols="30" rows="10" placeholder="ex: Description"></textarea>
            </div>

            <div>
              <label for="article_img">Image</label>
              <input type="file" name="article_img" id="article_img">
            </div>

            <div>
              <label for="article_publication_date">Date de publication</label>
              <input type="date" name="article_publication_date" id="article_publication_date">
            </div>

            <div>
              <a href="#" type="submit" class="btn btn-primary mt-3">Valider</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




<?php
  require_once "../controller/footer.controller.php"
?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>