<?php 

	require("/home/romil/config.php");
	
	// see fail peab olema siis seotud kõigiga kus
	// tahame sessiooni kasutada
	// saab kasutada nüüd $_SESSION muutujat
	session_start();
	
	$database = "if16_romil";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
?>