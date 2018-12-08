<?php

if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['mail']) && !empty($_POST['mail'])) {
    $pseudo = htmlentities($_POST['login']);
    $pass = htmlentities($_POST['password']);
    $mail = htmlentities($_POST['mail']);

    include('database.fn.php');

    $sql = 'SELECT * FROM users WHERE pseudo ="'.$pseudo.'" OR email ="'.$mail.'";';
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) == 0) {
        //No user with this email or this pseudo
        $sql = 'INSERT INTO users(pseudo,email,password) VALUES ("'.$pseudo.'","'.$mail.'","'.$pass.'");';
        session_start();
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['id'] = $data['userId'];
        header('Location : ../soundboard.php');
    } else {
        //A user with this pseudo or email already exists
        header('Location : ../register.php?err=1');
    }
}

?>