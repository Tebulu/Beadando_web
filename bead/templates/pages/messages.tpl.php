<?php
//Üzenetek kiírása
include('./includes/database.inc.php');
	if(!isset($_SESSION["admin"]) or $_SESSION["admin"]!=1){
		Header("Location: .");
	}
	try {
        // Kapcsolódás
		$dbh=new PDO('mysql:dbname='.$db_name.'; host='.$host.'',$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
			$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
		if(isset($_POST["mid"])){
			$mid=$_POST["mid"];
			$dbh->query("delete from messages where mid=$mid");
		}

		
		$data = $dbh->query("SELECT * FROM messages")->fetchAll();

	foreach ($data as $row) {
?>
		<div class="container message">
			<h3 class="text-center">Név: <?php echo $row["name"]; ?></h3>
			<h4 class="text-center">Email: <?php echo $row["email"]; ?></h4>
			<p class="text-justify"><?php echo $row["message"]; ?></p>
			<form class="form-horizontal" action = "?page=messages" method = "post">
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-danger">Üzenet törlése</button>
						<input type="text" name="mid" hidden="hidden" value="<?php echo $row["mid"]; ?>">
					</div>
				</div>
			</form>
		</div>
	<?php 
			}
	}
			
		catch (PDOException $e) {
			$errormessage = "Hiba: ".$e->getMessage();
		}      

	?>