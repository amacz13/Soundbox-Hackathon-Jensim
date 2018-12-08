<?php

session_start();
if (!$_SESSION['pseudo']) {
  header('Location: login.php');
  exit(0);
}

if (isset($_POST['name']) && !empty($_POST['name'])) {
    include('database.fn.php');

    $sql = 'INSERT INTO configs(userId,configName) VALUES ('.$_SESSION['id'].',"'.htmlentities($_POST['name']).'");';
    $result = mysqli_query($mysqli, $sql);
    if ($result == 1) {
        echo "Ok";
    } else {
        echo "Error";
    }
}
?>