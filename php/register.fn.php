<?php

if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['confirmation']) && !empty($_POST['confirmation'])) {
    $pseudo = htmlentities($_POST['login']);
    $pass = htmlentities($_POST['password']);
    $mail = htmlentities($_POST['mail']);
    $confirmation = htmlentities($_POST['confirmation']);

    include("database.fn.php");

    $sql = 'SELECT * FROM users WHERE pseudo ="'.$pseudo.'" OR email ="'.$mail.'";';
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) == 0) {
        //No user with this email or this pseudo
        if ($confirmation == $pass) {
            //Passwords match
            $hash = password_hash($pass, PASSWORD_BCRYPT);
            $sql = 'INSERT INTO users(pseudo,email,password) VALUES ("'.$pseudo.'","'.$mail.'","'.$hash.'");';
            $result = mysqli_query($mysqli, $sql);
            header('Location : ../login.php?info=1');
        } else {
            //Passwords doesn't match
            header('Location : ../register.php?err=2');
        }
    } else {
        //A user with this pseudo or email already exists
        header('Location : ../register.php?err=1');
    }
} else {
    header('Location : ../register.php?err=3');
}

?>