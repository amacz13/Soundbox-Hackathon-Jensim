<?php
    if (isset($_GET['config']) && !empty($_GET['config'])
    {
        $config = htmlentities($_POST['config']);
        include('database.fn.php');

    $sql = 'SELECT * FROM buttons WHERE idConfig ="'.$config.'";';
    $result = mysqli_query($mysqli, $sql);
    $myArray = array();
    if ($result) {

    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    }
    $contenu_json=json_encode($myArray);
    }
    
    $result->close();
    $mysqli->close();
    }
?>