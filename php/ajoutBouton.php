<?php
    if (isset($_POST['config']) && !empty($_POST['config'])&& isset($_POST['texte']) && !empty($_POST['texte']) && isset($_POST['url']) && !empty($_POST['url']) && isset($_POST['color']) && !empty($_POST['color'])) {
        $config = htmlentities($_POST['config']);
        $texte=htmlentities($_POST['texte']);
        $url=htmlentities($_POST['url']);
        $color=htmlentities($_POST['color']);
        include('database.fn.php');

        $sql = 'INSERT INTO buttons(urlSound,color,text,configId) values ("'.$url.'","'.$color.'","'.$texte.'",'.$config.');';
        $result = mysqli_query($mysqli, $sql);
     
        if($result==1)
        {
            echo 'okay';
        }else{
            echo 'non okay';
        }
    } else {
        echo "Missing Args";
    }
?>