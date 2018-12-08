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

<body>
<?php include("header.php")?>

<div class="row ">
    <div class="col s6 offset-s3 center-top">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">SoundB</span>
          <h3 class="text-center">Inscription</h3>
        </div>
        <div class="card-action">
            <div class="row">
                <div class="input-field col s12">
                <input id="login" type="text" class="validate">
                <label for="login">Pseudo</label>
                </div>
             </div>
             <div class="row">
                <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
                </div>
             </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="cfpassword" type="password" class="validate">
                <label for="password">Confirmation</label>
            </div>
        </div>
        <div class="row">
        <div class="col s4">
            <button class="btn waves-effect waves-light" type="submit" name="action">Send
                <i class="material-icons right">send</i>
            </button>
            
        </div>
        </div>
      </div>
    </div>
  </div>
  

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/app.js"></script>
</body>
</html>