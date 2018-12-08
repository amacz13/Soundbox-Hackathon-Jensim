<?php if (isset($_SESSION['num'])): ?>
    <header>

      <nav class="cyan darken-2">
        <div class="nav-wrapper">
          <a href="soundboard.php" class="brand-logo center">SoundBox</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <a id="menu" class="waves-effect waves-light btn btn-floating " onclick="editMode()"><i class="material-icons left">settings</i></a>
          <div class="tap-target" data-target="menu">
          <div class="tap-target-content">
            <p>Mode édition activé</p>
          </div>
        </div>
            <li><a href="soundboard.php">SoundBoard</a></li>
            <li><a href="compte.php">Compte</a></li>
            <li><a href="login.php">Connexion/Inscription</a></li>
          </ul>
        </div>
      </nav>

    </header>

<?php else: ?>
     <header>

      <nav class="cyan darken-2">
        <div class="nav-wrapper">
          <a href="soundboard.php" class="brand-logo center">SoundBox</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
          <a id="menu" class="waves-effect waves-light btn btn-floating" ><i class="material-icons left">settings</i></a>
          <div class="tap-target" data-target="menu">
          <div class="tap-target-content">
            <p>Mode édition activé</p>
          </div>
        </div>
            <li><a href="soundboard.php">SoundBoard</a></li>
            <li><a href="logout.php">Deconnexion</a></li>
          </ul>
        </div>
      </nav>

    </header>

<?php endif ?>