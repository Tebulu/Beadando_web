<!-- Regisztráció -->

	<?php if(isset($message)) { ?>
		
		<?php if($again) { ?>
			<h1 class="alert-danger text-center">A regisztráció nem sikerült!</h1>
			<h2 class="text-center"><?php echo $message; ?></h2>
			<p class="text-center"><a href="?page=login" >Próbálja újra!</a></p>
	<?php }else{ ?><h1 class="alert-success text-center"><?php echo $message; ?></h2> 
	<?php }} ?>
