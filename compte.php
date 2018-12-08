<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>

    </head>

    <body class="cyan lighten-5">

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
              <li><a href="compte.php">Compte</a></li>
              <li><a href="#">Deconnexion</a></li>
            </ul>
          </div>
        </nav>

      <div class="container">

        <h4 class="titrePage">Mon Compte</h4>
        <div class="card-panel" id="Compte">

          <div class="row">
            <h6>Bonjour Pseudo</h6>
            <p>address.mail@univ-lemans.fr</p>
          </div>

          <div class="card col l6 s12">
            <div class="card-content">

              <form method="post" action="#" class="formulaire col offset-l1">

                <span>Modifier Mot de passe : </span>

                <div class="input-field col s12">
                  <input id="mdp" type="password" class="validate">
                  <label for="mdp">Mot de passe actuel</p></label>
                </div>

                <div class="input-field col s12">
                  <input id="mdp" type="password" class="validate">
                  <label for="mdp">Nouveau mot de passe</label>
                </div>

                <div class="col offset-s5">
                  <input type="submit" value="Valider" class="waves-effect waves-light btn"/>
                </div>
                
              </form>
              
            </div>
          </div>
               
        </div>
        
      </div>
          
      <?php include_once ("footer.php"); ?>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>