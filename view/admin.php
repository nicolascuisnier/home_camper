<?php
session_start();
require_once "../controller/admin.controller.php";



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

  <table class="table table-sm table table-hover text-center">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">mail</th>
      <th scope="col">id de l'anonce</th>
      <th scope="col">Titre de l'annonce</th>
      <th scope="col">image 1</th>
      <th scope="col">image 2</th>
      <th scope="col">image 3</th>
      <th scope="col">Categorie</th>
      <th scope="col">Validation</th>
      <th scope="col">Accepter</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($viewAnnonceArray as $annonce){ ?>
    <tr>
      <td><?=$annonce['user_id']?></th>
      <td><?=$annonce['user_mail']?></td>
      <td><?=$annonce['items_id']?></td>
      <td><?=$annonce['items_title']?></td>
      <td><img src="../assets/gallery/<?=$annonce['items_pictureOne']?>" style="width: 100px;" alt=""></td>
      <td><img src="../assets/gallery/<?=$annonce['items_pictureTwo']?>" style="width: 100px;" alt=""></td>
      <td><img src="../assets/gallery/<?=$annonce['items_pictureThree']?>" style="width: 100px;" alt=""></td>
      <td><?=$annonce['category_name']?></td>
      <form action="">
      <td><select class="form-control" id="exampleFormControlSelect1">
      <option><?=$annonce['items_validate']?></option>
      <option><?=$annonce['items_validate']?></option>
      </select></td>
      </form>
      <td><button type="button" class="btn  btn-success mr-3 btn-sm " data-target="#exampleModal"><i class="fas fa-check "></i></button></td>
      <td><button type="button" data-toggle="modal"  data-target="#exampleModal" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button></td>
      
    </tr>
    
 <?php } ?>
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="text-danger font-weight-bold text-center">Etes vous sur de vouloire supprimer l'annonce?</p>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Oui</button>
        <button type="submit" class="btn btn-danger">Non</button>
      </div>
    </div>
  </div>
</div>
   
  </tbody>
</table>
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