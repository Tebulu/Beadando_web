<!--Galéria megjelenítése-->
<?php
    include('./includes/config.inc.php');    
    // adatok összegyűjtése:    
    $pictures = array();
    $read = opendir($FOLDER);
    while (($file = readdir($read)) !== false) {
        if (is_file($FOLDER.$file)) {
            $end = strtolower(substr($file, strlen($file)-4));
            if (in_array($end, $TYPES)) {
                $pictures[$file] = filemtime($FOLDER.$file);
            }
        }
    }
    closedir($read);
    
    // Megjelenítés
?>
        

<div class="container">
	<h1>Galéria</h1>
	<div class="row"> 
		<?php
			arsort($pictures);
			$db=0; 
			foreach($pictures as $file => $date){
				$db++;
				if($db%4==1){
		?>
					<div class="column">
						<a href="<?php echo $FOLDER.$file ?>" target="_blank">
						  <img src="<?php echo $FOLDER.$file ?>" alt="<?php echo $file; date($DATEFORM,$date); ?>" style="width:100%">
						  <div class="caption">
							<p>Név:  <?php echo $file; ?></p>
							<p>Dátum:  <?php echo date($DATEFORM,$date) ?></p>
						  </div>
						</a>   
					</div>		
			<?php
				}else if($db%4==2){
			?>
					<div class="column">
						<a href="<?php echo $FOLDER.$file ?>" target="_blank">
							  <img src="<?php echo $FOLDER.$file ?>" alt="<?php echo $file; date($DATEFORM,$date); ?>" style="width:100%">
							  <div class="caption">
								<p>Név:  <?php echo $file; ?></p>
								<p>Dátum:  <?php echo date($DATEFORM,$date) ?></p>
							  </div>
						</a>   
					</div>	
			<?php
				}else if($db%4==3){
			?>
		
					<div class="column">
						<a href="<?php echo $FOLDER.$file ?>" target="_blank">
							  <img src="<?php echo $FOLDER.$file ?>" alt="<?php echo $file; date($DATEFORM,$date); ?>" style="width:100%">
							  <div class="caption">
								<p>Név:  <?php echo $file; ?></p>
								<p>Dátum:  <?php echo date($DATEFORM,$date) ?></p>
							  </div>
						</a>   
					</div>	
			<?php
				}else if($db%4==0){
		?>	
					<div class="column">
						<a href="<?php echo $FOLDER.$file ?>" target="_blank">
							  <img src="<?php echo $FOLDER.$file ?>" alt="<?php echo $file; date($DATEFORM,$date); ?>" style="width:100%">
							  <div class="caption">
								<p>Név:  <?php echo $file; ?></p>
								<p>Dátum:  <?php echo date($DATEFORM,$date) ?></p>
							  </div>
						</a>   
					</div>	
			<?php
				}
			}
			?>	
	</div>
</div>