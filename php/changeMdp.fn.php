<?php
session_start();
if (isset($_POST['mdpactu']) && !empty($_POST['mdpnew']) && $_SESSION['pseudo']) {

    $pseudo = htmlentities($_SESSION['pseudo']);
    $mdpactu = htmlentities($_POST['mdpactu']);

    include('database.fn.php');

    $sql = 'SELECT password FROM users WHERE pseudo ="'.$pseudo.'";';
    $result = mysqli_query($mysqli, $sql);

    if (!password_verify($mdpactu, $result[0]) {
        //MDP is incorrect
        echo'Mot de passe incorrect';
    } 
    else {
        //MDP is correct
        $mdpnew = htmlentities($_POST['mdpnew']);
        $hash = password_hash(mdpnew, PASSWORD_BCRYPT);
        $ChangementMdp = 'UPDATE users SET password="'.$hash.'" WHERE pseudo="'.$pseudo.'" ;';
        $Connect->query($ChangementMdp);
            
        $_SESSION['pass'] = $mdpnew;
        echo'Succes Changement';
        header('Location : ../compte.php');
    }
}
else {
   header('Location : ../login.php');
}

?>