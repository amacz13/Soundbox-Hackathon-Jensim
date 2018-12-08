<?php

if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $pseudo = htmlentities($_POST['login']);
    $pass = htmlentities($_POST['password']);

    include('database.fn.php');

    $sql = 'SELECT password FROM users WHERE pseudo ="'.$pseudo.'";';
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) == 0) {
        //Pseudo is incorrect
        header('Location : ../login.php?err=1');
    } else {
        //Pseudo is correct
        $data = mysqli_fetch_assoc($result);
        $passwordHash = $data['password'];
        if (password_verify($pass,$passwordHash)) {
            //Password is correct
            session_start();
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['id'] = $data['userId'];
            header('Location : ../soundboard.php');
        } else {
            //Password is incorrect
            header('Location : ../login.php?err=2');
        }
    }
}

?>