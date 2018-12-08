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
            <div class="fixed-action-btn">
              <a class="btn-floating btn-large red waves-effect waves-light btn" onclick="stop()">CHUT!</a>
            </div>
        </div>

      </div>

      <?php include_once ("footer.php"); ?>
      
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
    </body>
  </html>