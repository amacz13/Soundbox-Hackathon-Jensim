<?php
    if (isset($_POST['config']) && !empty($_POST['config'])) {
        $config = htmlentities($_POST['config']);
        include('database.fn.php');

        $sql = 'SELECT * FROM buttons WHERE configId ='.$config.';';
        $result = mysqli_query($mysqli, $sql);
        $myArray = array();
        if ($result) {

            while($row = mysqli_fetch_assoc($result)) {
                $myArray[] = $row;
            }

            $contenu_json=json_encode($myArray);
            echo $contenu_json;
        }
    }
?>