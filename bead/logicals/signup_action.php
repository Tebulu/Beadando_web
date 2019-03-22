<?php
//Regisztrálás
if(isset($_POST['user_name']) && isset($_POST['password']) && isset($_POST['first_name']) && isset($_POST['last_name'])&& isset($_POST['email'])) {
//Megegyezik-e a két jelszó?
    if($_POST['password'] == $_POST["password2"]){
		try {
			$user = 'atlatszonet';
			$password = 'RJUJBHn5';
			$dbh = new PDO('mysql:dbname=atlatszonet; host=mysql.omega:3306', $user, $password,
							array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
			// Létezik már a felhasználói név?
			$sqlSelect = "select uid from users where user_name = :user_name";
			$sth = $dbh->prepare($sqlSelect);
			$sth->execute(array(':user_name' => $_POST['user_name']));
			if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
				$message = "A felhasználói név már foglalt!";
				$again = "true";
			}
			else {
				// Ha nem létezik, akkor regisztráljuk
				$sqlInsert = "insert into users(user_name, first_name, last_name, email, password)
							  values(:user_name, :first_name, :last_name, :email, :password)";
				$stmt = $dbh->prepare($sqlInsert); 
				$stmt->execute(array(':user_name' => $_POST['user_name'],':first_name' => $_POST['first_name'], ':last_name' => $_POST['last_name'],
									 ':email' => $_POST['email'], ':password' => sha1($_POST['password']))); 
				if($count = $stmt->rowCount()) {
					$newid = $dbh->lastInsertId();
					$message = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";                     
					$again = false;
				}
				else {
					$message = "A regisztráció nem sikerült.";
					$again = true;
				}
			}
		}
		catch (PDOException $e) {
			$message = "Hiba: ".$e->getMessage();
			$again = true;
		} 
	}	
	else {
		$message = "A ket jelszo nem egyezik meg.";
		$again = true;
	}
}
 else {
     header("Location: .");
 }
?>