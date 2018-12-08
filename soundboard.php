<!DOCTYPE html>
  <html style="overflow-x: hidden;">
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

        <?php

        session_start();
        if (isset($_SESSION['id'])) {
        ?>
        <div class="input-field col s12">
          <select id="selectConf" onchange="loadconfig()">
            <option value="0" disabled selected>Sélectionnez votre configuration</option>
            <?php 
            
            include('php/database.fn.php');
            $sql = "SELECT * FROM configs WHERE userID = ".$_SESSION['id'].";";
            $result = mysqli_query($mysqli, $sql);
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
            <option value="<?php echo $data['configId'];?>"><?php echo $data['configName'];?></option>
            <?php } ?>
          </select>
        </div>
        <?php
        }
        ?>
        <div class="card-panel col l10 offset-l1 s10 offset-s1">
          <div class="container-fluid soundboard">
          </div> 
        </div>
      </div>

      <div class="fixed-action-btn">
        <a class="btn-floating btn-large red waves-effect waves-light btn" onclick="stop()">CHUT!</a>
      </div>
    

      <?php include_once ("footer.php"); ?>
      
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
    </body>
  </html>