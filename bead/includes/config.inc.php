<?php
//Weboldal címe
	$main_title = array(
		'title' => 'Átlátszónet | az Átlátszónet Alapítvány honlapja',
	);
	
//Fejléc
	$header = array(
		'image_source' => 'logo_atlatszonetalapitvany.png',
		'image_alt' => 'Logo',
		'title' => 'Mini honlap',
		'describe' => ''
	);

//Oldalak
	$pages = array(
		'/' => array('file' => 'main', 'name' => 'Főoldal', 'menu' => array(1,1,1)),
		'education' => array('file' => 'education', 'name' => 'Képzések', 'menu' => array(1,1,1)),
		'iksz' => array('file' => 'iksz', 'name' => 'IKSZ', 'menu' => array(1,1,1)),
		'pictures' => array('file' => 'pictures', 'name' => 'Galéria', 'menu' => array(1,1,1)),
		'upload' => array('file' => 'upload', 'name' => 'Képek feltöltése', 'menu' => array(0,0,1)),
		'contact' => array('file' => 'contact', 'name' => 'Kapcsolat', 'menu' => array(1,1,1)),
		'messages' => array('file' => 'messages', 'name' => 'Üzenetek', 'menu' => array(0,0,1)),
		'login' => array('file' => 'login', 'name' => 'Belépés', 'menu' => array(1,0,0)),
		'logout' => array('file' => 'logout', 'name' => 'Kilépés', 'menu' => array(0,1,1)),
		'login_action' => array('file' => 'login_action', 'name' => '', 'menu' => array(0,0,0)),
		'signup_action' => array('file' => 'signup_action', 'name' => '', 'menu' => array(0,0,0)),
		'contact_action' => array('file' => 'contact_action', 'name' => '', 'menu' => array(0,0,0))	
	);
//Ha az oldal nem található
	$error_page = array ('file' => '404', 'name' => 'A keresett oldal nem található!');

//Képek
	date_default_timezone_set('Europe/Brussels');
		$FOLDER = './gallery/';
		$TYPES = array ('.jpg', '.png');
		$MEDIATYPES = array('image/jpeg', 'image/png');
		$DATEFORM = "Y.m.d. H:i";
		$MAXSIZE = 500*1024;
?>