<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$find['file'].'.php')) { include("./logicals/{$find['file']}.php"); } ?>
<!DOCTYPE html>
<html lang="hu">
	<head>
		<meta charset="utf-8">
		<title><?= $main_title['title'] . ( (isset($main_title['describe'])) ? ('|' . $main_title['describe']) : '' ) ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script  type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(function() {
				$("#tfq2b").click(function() {
					if ($("#tfq2b").val() == "Search our website"){
						$("#tfq2b").val(""); 
					}
				});
			});
		</script>
		<script type="text/javascript" src="./js/main.js"></script>
		<link rel="stylesheet" href="./styles/css.css" type="text/css">
		<?php if(file_exists('./styles/'.$find['file'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $find['file']?>.css" type="text/css"><?php } ?>
	</head>
	
	<body>
		<!--Fejléc-->
		<header class="header">
			<img class="img-responsive" src="./images/<?=$header['image_source']?>" alt="<?=$header['image_alt']?>"/>
			<?php if(isset($_SESSION['user_name'])) { ?>Bejlentkezve: <strong><?php= $_SESSION['first_name']." ".$_SESSION['last_name']." (".$_SESSION['user_name'].")" ?></strong><?php } ?>
		</header>
		
		<!--Menü-->
		<nav class="navbar navbar-inverse nav">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="./">Átlátszónet</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<?php foreach ($pages as $url => $page) { ?>
									<?php if(! isset($_SESSION['user_name']) && $page['menu'][0] || isset($_SESSION['user_name']) && !isset($_SESSION['admin']) && $page['menu'][1] || isset($_SESSION['admin']) && $page['menu'][2]){ ?>
										<li<?= (($page == $find) ? ' class="active"' : '') ?>>
										<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
										<?= $page['name'] ?></a>
										</li>
									<?php } ?>
						<?php } ?>
					</ul>
					<form class="navbar-form navbar-right" id="tfnewsearch" method="get" action="http://www.google.com">
					  <div class="input-group">
						<input type="text" class="form-control" placeholder="Search" name="search" id="tfq2b">
						<div class="input-group-btn">
						  <button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						  </button>
						</div>
					  </div>
					</form>
				</div>
			</div>
		</nav>
		<!--Tartalom-->
		<div class="content">
			<?php include("./templates/pages/{$find['file']}.tpl.php"); ?>
		</div>
		
		<!--Lábléc-->
		<footer class="text-center">
			 <p>Ez a honlap iskolai projektfeladat céljára készült!</p>
			 <p>Az eredeti weboldal elérhető itt: <a href="https://atlatszonet.hu/" target="_blank">Átlátszónet</a></p>
		</footer>
	</body>
</html>