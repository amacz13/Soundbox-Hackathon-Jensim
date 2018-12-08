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
            <a class="waves-effect waves-light btn" onclick="btnClick(1)">Son 1</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(2)">Son 2</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(3)">Son 3</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(4)">Son 4</a>
          </div>
          <div class="row soundboard">
            <a class="waves-effect waves-light btn" onclick="btnClick(5)">Son 5</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(6)">Son 6</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(7)">Son 7</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(8)">Son 8</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(9)">Son 9</a>
          </div>  
          <div class="row soundboard">
            <a class="waves-effect waves-light btn" onclick="btnClick(10)">Son 10</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(11)">Son 11</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(12)">Son 12</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(13)">Son 13</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(14)">Son 14</a>
          </div>  
          <div class="row soundboard">
            <a class="waves-effect waves-light btn" onclick="btnClick(15)">Son 15</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(16)">Son 16</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(17)">Son 17</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(18)">Son 18</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(19)">Son 19</a>
          </div> 
          <div class="row soundboard">
            <a class="waves-effect waves-light btn" onclick="btnClick(20)">Son 20</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(21)">Son 21</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(22)">Son 22</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(23)">Son 23</a>
            <a class="waves-effect waves-light btn" onclick="btnClick(24)">Son 24</a>
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