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
          <div class="card blue">
            <div class="card-content white-text">
                <span class="card-title">Info</span>
                <p>Vous êtes en mode édition !</p>
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
            <a class="waves-effect waves-light btn btn-floating modal-trigger" href="#addConfModal"><i class="material-icons left">add</i></a>
          </div>
        </div>
        <?php
        }
        ?>
        <div class="card-panel col l10 offset-l1 s10 offset-s1">
          <div class="container-fluid soundboard">
          </div> 
            <div class="fixed-action-btn">
              <a class="btn-floating btn-large red waves-effect waves-light btn" onclick="stop()"><i class="material-icons left">stop</i></a>
            </div>
        </div>

      </div>

      <!-- Modal Structure -->
      <div id="modal1" class="modal">
        <div class="modal-content">
        <form action="php/login.fn.php" method="post" id="ajouBtn">
                <div class="card-action">
                    <div class="row">
                        <div class="input-field col s12">
                        <input id="texte" type="text" class="validate" name="texte">
                        <label for="texte" id="texte">Nom du bouton</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="url" type="url" class="validate" name="url">
                            <label for="url" id="url">Url du bouton</label>
                        </div>
                    </div>
                    
                    <form action="#" id="couleur">
                    <div class="row">
                      <div class="col 12">
                      <p>
                        <label>
                          <input name="group1" type="radio" value="red" checked />
                          <span>Red</span>
                        </label>
                      </p>
                      <p>
                        <label>
                          <input name="group1" type="radio" value="yellow" />
                          <span>Yellow</span>
                        </label>
                      </p>
                      <p>
                        <label>
                          <input name="group1" type="radio" value="green" />
                          <span>Green</span>
                        </label>
                      </p>
                      <p>
                        <label>
                          <input name="group1" type="radio" value="brown" />
                          <span>Brown</span>
                        </label>
                      </p>
                  </div>
                </div>
               </form>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat" onclick="ajouterBouton()">Confirmer</a>
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
        </div>
      </div>

      <!-- Modal Structure -->
      <div id="addConfModal" class="modal">
        <div class="modal-content">
          <h4>Nouvelle configuration</h4>
          <div class="input-field c">
            <input placeholder="Nom de la configuration" id="configName" type="text" class="validate">
            <label for="configName">Nom de la configuration</label>
          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" onclick="addConfig()" class="modal-close waves-effect waves-green btn-flat">Ajouter</a>
        </div>
      </div>

      <?php include_once ("footerPlayer.php"); ?>
      
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
    </body>
  </html>