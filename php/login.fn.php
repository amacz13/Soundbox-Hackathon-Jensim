<?php

if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $pseudo = htmlentities($_POST['login']);
    $pass = htmlentities($_POST['password']);


}

?>