<?php
	$_SESSION = array(); // Détruit toutes les variables de session
	session_destroy(); // Détruit la session

	header('Location : ../soundboard.php');
?>