<!--Nincs kész! Bejelentkezés, fő oldalra léptetés!!!!!!-->
<?php if(isset($row)) { ?>
    <?php if(!$row) { ?>
       <h1 class="alert-danger text-center">A bejelentkezés nem sikerült!</h1>
        <p class="text-center"><a href="?page=login" >Próbálja újra!</a></p>
    <?php }else{header("Location: .");}  ?>
<?php } ?>
<?php if(isset($errormessage)) { ?>
    <h2 class="alert-danger text-center"><?= $errormessage ?></h2>
<?php } ?>
