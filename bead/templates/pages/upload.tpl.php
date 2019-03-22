<?php
    // Alkalmazás logika:
    include('./includes/config.inc.php');
    $message = array();   

    // Űrlap ellenőrzés:
    if (isset($_POST['send'])) {
        //print_r($_FILES);
        foreach($_FILES as $file) {
            if ($file['error'] == 4);   // Nem töltött fel fájlt
            elseif (!in_array($file['type'], $MEDIATYPES))
                $message[] = " Nem megfelelő típus: " . $file['name'];
            elseif ($file['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $file['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $file['size'] > $MAXSIZE) 
                $message[] = " Túl nagy állomány: " . $file['name'];
            else {
                $finally = $FOLDER.strtolower($file['name']);
                if (file_exists($finally))
                    $message[] = " Már létezik: " . $file['name'];
                else {
                    move_uploaded_file($file['tmp_name'], $finally);
                    $message[] = ' Ok: ' . $file['name'];
                }
            }
        }        
    }
?>
    <h1>Feltöltés a galériába:</h1>
<?php
    if (!empty($message))
    {
        echo '<ul>';
        foreach($message as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
    <form  class="form-horizontal" action="?page=upload" method="post"
                enctype="multipart/form-data">
        
            Select file: <input type="file" name="file"><br><br>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default" name="send">Submit</button>
		  </div>
		</div>			
      </form>    
</body>
</html>
