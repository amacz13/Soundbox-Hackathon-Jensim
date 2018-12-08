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
              <li><a href="compte.php">Compte</a></li>
              <li><a href="login.php">Connexion/Inscription</a></li>
            </ul>
          </div>
        </nav>
  
      </header>

      <div class="container">
        <div class="row">
          <h4>Mon SoundBoard</h4>
        </div>

        <div class="input-field col s12">
          <select>
            <option value="1">Config default</option>
            <option value="2">Config 1</option>
            <option value="3">Config 2</option>
          </select>
        </div>

        <div class="card-panel col l10 offset-l1 s10 offset-s1">
          <div class="row soundboard">
            <a class="waves-effect waves-light btn" onclick="btnClick(0)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(1)"><span>Son 1</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(2)"><span>Son 2</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(3)"><span>Son 3</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(4)"><span>Son 4</span></a>
          </div>
          <div class="row soundboard">
            <a class="waves-effect waves-light btn" onclick="btnClick(5)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(6)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(7)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(8)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(9)"><span>Son 0</span></a>
          </div>  
          <div class="row soundboard">
            <a class="waves-effect waves-light btn" onclick="btnClick(10)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(11)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(12)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(13)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(14)"><span>Son 0</span></a>
          </div>  
          <div class="row soundboard">
            <a class="waves-effect waves-light btn" onclick="btnClick(15)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(16)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(17)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(18)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(19)"><span>Son 0</span></a>
          </div> 
          <div class="row soundboard">
            <a class="waves-effect waves-light btn" onclick="btnClick(20)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(21)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(22)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(23)"><span>Son 0</span></a>
            <a class="waves-effect waves-light btn" onclick="btnClick(24)"><span>Son 0</span></a>
          </div> 
        </div>
      </div>

      <div class="fixed-action-btn">
        <a class="btn-floating btn-large red waves-effect waves-light btn" onclick="stop()">CHUT!</a>
      </div>
    

      <?php include_once ("footer.php"); ?>
      
            <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script>
        $(document).ready(function(){
      $('.tap-target').tapTarget();
    });
  </script>
    </body>
  </html>