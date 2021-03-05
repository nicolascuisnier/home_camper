<div class="text-left">
                 <label class="label" for="lastname">Login</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="lastname" name="lastname" type="text" class="form-control" placeholder="ex. DOE" value="<?=  $detailsUsertArray['login'] ?>" disabled>
             </div>

             <!-- Adresse mail -->
             <div class="text-left">
                 <label class="label" for="mail">Adresse mail</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="mail" name="mail" type="mail" class="form-control" value="<?= $detailsUsertArray['mail'] ?>" disabled>
             </div>

             <div class="text-left">
                 <label class="label" for="mail">Titre de vos annonces annonce</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="annonce" name="annonce" type="annonce" class="form-control" value="<?=  $detailsUsertArray['title'] ?>" disabled>
             </div>


             




             <form action="view-modifyPatients.php" method="POST">
                 <button type="submit" class="btn btn-sm btn-dark" name="modifyPatient" value="<?= $detailsPatientArray['id'] ?>">Modifier</button>
                 <a type="button" href="view-listPatients.php" class="btn btn-sm btn-outline-dark">Retour</a>
             </form>
