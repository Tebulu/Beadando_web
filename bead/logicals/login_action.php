<?php
if(isset($_POST['user_name']) && isset($_POST['password'])) {
    try {
        // Kapcsolódás
		$user = 'atlatszonet';
		$password = 'RJUJBHn5';
        $dbh = new PDO('mysql:dbname=atlatszonet; host=mysql.omega:3306', $user, $password,
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Felhsználó keresése
        $sqlSelect = "select uid, first_name, last_name, authority from users where user_name = :user_name and password = sha1(:password)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':user_name' => $_POST['user_name'], ':password' => $_POST['password']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['first_name'] = $row['first_name']; $_SESSION['last_name'] = $row['last_name']; $_SESSION['user_name'] = $_POST['user_name'];
			if($row['authority']==1){ $_SESSION['admin'] = $row['authority'];}
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    header("Location: .");
}
?>
