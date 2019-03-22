<?php
//Oldalak meghívása
	include('./includes/config.inc.php');
//Kért oldal keresése
	$find = current($pages);
	if (isset($_GET['page'])) {
		if (isset($pages[$_GET['page']]) && file_exists("./templates/pages/{$pages[$_GET['page']]['file']}.tpl.php")) {
			$find = $pages[$_GET['page']];
		}else { 
		//Ha a kért oldalt nem találja, jelzi a felhasználó számára
			$find = $error_page;
			header("HTTP/1.0 404 Not Found");
		}
	}
//főoldal betöltése
	include('./templates/index.tpl.php'); 
?>