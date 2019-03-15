<?php
//Menü
$main_title = array(
    'title' => 'Átlátszónet | az Átlátszónet Alapítvány honlapja',
);

$header = array(
    'image_source' => 'logo-atlatszonetalapitvany.png',
    'image_alt' => 'Logo',
	'title' => 'Mini honlap',
	'describe' => ''
);


$pages = array(
	'/' => array('file' => 'main', 'name' => 'Főoldal', 'menu' => array(1,1,1)),
	'education' => array('file' => 'education', 'name' => 'Képzések', 'menu' => array(1,1,1)),
	'iksz' => array('file' => 'iksz', 'name' => 'IKSZ', 'menu' => array(1,1,1)),
	'contact' => array('file' => 'contact', 'name' => 'Kapcsolat', 'menu' => array(1,1,1)),
	'messages' => array('file' => 'messages', 'name' => 'Üzenetek', 'menu' => array(0,0,1)),
    'login' => array('file' => 'login', 'name' => 'Belépés', 'menu' => array(1,0,0)),
    'logout' => array('file' => 'logout', 'name' => 'Kilépés', 'menu' => array(0,1,1)),
    'login_action' => array('file' => 'login_action', 'name' => '', 'menu' => array(0,0,0)),
    'signup' => array('file' => 'signup', 'name' => '', 'menu' => array(0,0,0)),
	'contact_action' => array('file' => 'contact_action', 'name' => '', 'menu' => array(0,0,0))	
);

$error_page = array ('file' => '404', 'name' => 'A keresett oldal nem található!');


/*
'bemutatkozas' => array('file' => 'bemutatkozas', 'name' => 'Bemutatkozás', 'menu' => array(1,1)),
	'kapcsolat' => array('file' => 'kapcsolat', 'name' => 'Kapcsolat', 'menu' => array(1,1)),
	'cikkek' => array('file' => 'cikkek', 'name' => 'Cikkek', 'menu' => array(1,1)),
    'tablazat' => array('file' => 'tablazat', 'name' => 'Táblázat', 'menu' => array(1,1)),
    'belepes' => array('file' => 'belepes', 'name' => 'Belépés', 'menu' => array(1,0)),
    'kilepes' => array('file' => 'kilepes', 'name' => 'Kilépés', 'menu' => array(0,1)),
    'belep' => array('file' => 'belep', 'name' => '', 'menu' => array(0,0)),
    'regisztral' => array('file' => 'regisztral', 'name' => '', 'menu' => array(0,0))
*/
?>