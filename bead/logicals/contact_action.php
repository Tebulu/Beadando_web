<?php
include('./includes/database.inc.php');
	//szerver oldali ellenőrzés 
	$again=false;
	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['name']) || strlen($_POST['name']) < 5){
		$message = "Hibás név!";                     
		$again = true;
	}
	if((!isset($_POST['email']) || !preg_match($re,$_POST['email']))&&!$again){
		$message = "Hibás email!";                     
		$again = true;
	}
	if((!isset($_POST['message']) || empty($_POST['message']))&&!$again)
	{
		$message = "Hibás szöveg!";                     
		$again = true;
	}
//Adatbázisba bevitel
	if(!$again){
		try {
			// Kapcsolódás
			$dbh=new PDO('mysql:dbname='.$db_name.'; host='.$host.'',$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
			$sqlInsert = "insert into messages(name,email,message)
							  values(:name,:email,:message)";
				$stmt = $dbh->prepare($sqlInsert); 
				$stmt->execute(array(':name' => $_POST['name'],':email' => $_POST['email'],':message' => $_POST['message'])); 
				if($count = $stmt->rowCount()) {
					$message = "Az üzenetet sikeresen elküldtük. Kérjük szíves türelmét, míg a munkatársaink válaszolnak!";                     
					$again = false;
				}
		}
		catch (PDOException $e) {
			$errormessage = "Hiba: ".$e->getMessage();
			$again = true;
		}
	}
?>

