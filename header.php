<header>
  <nav class="cyan darken-2">
    <div class="nav-wrapper">
      <a href="soundboard.php" class="brand-logo center">SoundBox</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <a id="menu" class="waves-effect waves-light btn btn-floating" onclick="editMode()"><i class="material-icons left">settings</i></a>
      </div>
        <li><a href="soundboard.php">SoundBoard</a></li>
        <?php 
        session_start();
        if (isset($_SESSION['id'])) { ?>
        <li><a href="compte.php">Mon Compte</a></li>
        <li><a href="logout.php">Déconnexion</a></li>
        <?php } else { ?>
        <li><a href="login.php">Connexion/Inscription</a></li>
        <?php } ?>
      </ul>
    </div>
  </nav>

</header>