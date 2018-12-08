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

      <title>SoundBox</title>

    </head>

    <body class="cyan lighten-5">
      <?php include_once ("header.php"); ?>

      <div class="container">
        <div class="row">
          <h4>Mon SoundBoard</h4>
        </div>
        <div id="infoEdit" style="display: none;" class="row">
          <div class="col s3 m3"></div>
          <div class="col s6 m6">
            <div class="card blue">
              <div class="card-content white-text">
                  <span class="card-title">Info</span>
                  <p>Vous êtes en mode édition !</p>
              </div>
            </div>
          </div>
        </div>

        <?php

        session_start();
        if (isset($_SESSION['id'])) {
        ?>
        <div class="row valign-wrapper">
          <div class="col s11 m11 l11">
            <div class="input-field">
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
          </div>
          <div class="col s1 m1 l1">
            <a id="menu" class="waves-effect waves-light btn btn-floating" onclick="addConfig()"><i class="material-icons left">add</i></a>
          </div>
        </div>
        <?php
        }
        ?>
        <div class="card-panel col l10 offset-l1 s10 offset-s1">
          <div class="container-fluid soundboard">
          </div> 
            <div class="fixed-action-btn">
              <a class="btn-floating btn-large red waves-effect waves-light btn" onclick="stop()">CHUT!</a>
            </div>
        </div>

      </div>

      <!-- Modal Structure -->
      <div id="modal1" class="modal">
        <div class="modal-content">
        <form action="php/login.fn.php" method="post">
                <div class="card-action">
                    <div class="row">
                        <div class="input-field col s12">
                        <input id="login" type="text" class="validate" name="texte">
                        <label for="login">Nom du bouton</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="url" type="url" class="validate" name="url">
                            <label for="url">Url du bouton</label>
                        </div>
                    </div>
                    <div class="row valign-wrapper">
                        <div class="col s6">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Valider</button>
                        </div>
                        <div class="col s6">
                            <a href="register.php" class="right">Inscription</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Confirmer</a>
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
        </div>
      </div>

      <?php include_once ("footer.php"); ?>
      
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
    </body>
  </html>