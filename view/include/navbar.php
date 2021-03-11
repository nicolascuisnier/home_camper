  <!-- navbarre -->
  <nav>
    <div class="textNav nav-bar ">
      <a class="nav-link text-white " id="Hautdepage"></a>
      <ul class="nav justify-content-center">
        <li class="nav-item ">
          <a class="nav-link text-light  " href="../index.php">Accueil</a>
        </li>
        <li>
          <a class="nav-link text-light " href="#lesdernieresnews">Les dernières news</a>
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
        <?php
        if (!empty($_SESSION['nc_user']['id'])) {
        ?>
          <li class="nav-item">
            <a class="nav-link text-light " href="../view/deposeAnnonce.php">Déposer une annonce</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light " type="submit" href="../view/connexion.php" value="">Se déconnecter <i class="fas fa-user-slash"></i> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light " type="submit" href="../view/profil_user.php" >profil <i class="far fa-address-card"></i></a>
          </li>
          
        <?php
        } else {
        ?>
          <li class="nav-item">
            <a class="nav-link text-light " type="submit" href="../view/connexion.php" value="">Se connecter <i class="fas fa-user"></i></a>
          </li>
         
        <?php
        }
        if (!empty($_SESSION['nc_user']['id']) && $_SESSION['nc_user']['role'] == 'admin') {
        ?>
          <li class="nav-item">
            <a class="nav-link text-white" href="../view/admin.php">Admin</a>
          </li>
        <?php } ?>
      </ul>
    </div>
    </div>

  </nav>