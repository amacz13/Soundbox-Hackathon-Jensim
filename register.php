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

<body>
<?php include("header.php"); ?>

<div class="row">
    <div class="col s3 m3"></div>
    <div class="col s6 m6">
        <?php 

        if (isset($_GET['err']) && $_GET['err'] == 1) {

        ?>
        <div class="card red">
            <div class="card-content white-text">
                <span class="card-title">Erreur</span>
                <p>Un utilisateur avec ce pseudo ou cette adresse mail existe déjà !</p>
            </div>
        </div>
        <?php

        } else if (isset($_GET['err']) && $_GET['err'] == 2) {

        ?>
        <div class="card red">
            <div class="card-content white-text">
                <span class="card-title">Erreur</span>
                <p>Les mots de passe ne correspondent pas !</p>
            </div>
        </div>
        <?php

        } else if (isset($_GET['err']) && $_GET['err'] == 3) {

        ?>
        <div class="card red">
            <div class="card-content white-text">
                <span class="card-title">Erreur</span>
                <p>Tous les champs sont nécessaires !</p>
            </div>
        </div>
        <?php

        }

        ?>
    </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="card col l6 offset-l3 s10 offset-s1">
        <div class="card">
            <div class="card-content">
                <div class="row valign-wrapper">
                    <div class="col s8"><span class="card-title">Inscription</span></div>
                    <div class="col s4"><i class="material-icons large right">account_box</i></div>
                </div>
            </div>
            <form action="php/register.fn.php" method="post">
                <div class="card-action">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="login" type="text" class="validate" name="login">
                            <label for="login">Pseudo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="mail">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="password">
                            <label for="password">Mot de Passe</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="cfpassword" type="password" class="validate" name="confirmation">
                            <label for="cfpassword">Confirmation</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 right">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Valider</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
  

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
</body>
</html>