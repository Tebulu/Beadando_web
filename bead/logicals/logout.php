<?php
	//Kijelentkezés
	if(!isset($_SESSION['user_name'])) { 
		header("Location: .");								
	}
	$data = $_SESSION;
	unset($_SESSION["first_name"]);
	unset($_SESSION["last_name"]);
	unset($_SESSION["user_name"]);
	unset($_SESSION["admin"]);
?>