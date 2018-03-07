<!DOCTYPE html>
<?php
$titre = "HistoTree";
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title> <?php echo $titre ; ?> </title>

		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="css/jquery-ui.css" rel="stylesheet">
		<!-- Menu -->
		<link rel="stylesheet" type="text/css" href="css/Menu/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/Menu/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/Menu/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/Menu/style5Menu.css" />
		<link rel="stylesheet" href="css/Perso/index.css">
		<link rel="stylesheet" href="css/Perso/central.css">
		<!-- jQuery library -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>


		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- Perso -->
		<script type="text/javascript" src="js/Perso/index.js"></script>
		<!-- Menu -->
		<script src="js/Menu/modernizr.custom.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

  <body>
	<div class="row">
			<header >
  			<div class="col-md-12">
  				<h1 id="titre"><?php echo $titre ; ?></h1>
  			</div>
			</header>
	</div>
	<div class="container">
			<div class="row">
			 	<div id="ligne_principale">
			 		<div class="col-md-2">
			 			<!-- <?php // include("accordeon.php"); ?> -->
		  			</div>
		  			<div class="col-md-8">
		  			 	<?php include("central.php"); ?>
		  			</div>
		  			<div class="col-md-2">
		  			</div>
			 	</div>
			</div>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
				</div>
				<div class="col-md-2">
				</div>
			</div>
			<div class="row">
			 	<div id="row6">
			 		<div class="col-md-2">
			 		</div>
			 		<div class="col-md-2">
			 		</div>
			 		<div class="col-md-4">
			 			<div class="col-md-4">
			 			</div>
			 			<a href="index.php"><div class="col-md-4" id="Bouton">
			 				Créer mon <?php echo $titre; ?>
			 			</div></a>
			 			<div class="col-md-4">
			 			</div>
			 		</div>
			 		<div class="col-md-2">
			 		</div>
			 		<div class="col-md-2">
			 		</div>
			 	</div>
			</div>

		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  -->
		    <!-- Include all compiled plugins (below), or include individual files as needed -->
		    <?php include("menu.php") ?>

		
	</div> <!-- fin container-->
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/Menu/classie.js"></script>
<script src="js/Menu/borderMenu.js"></script>
</html>