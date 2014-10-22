<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf8"/>
	<link rel="stylesheet" href="Style.css" />
	<title>Fruidor Interne</title>
	</head>

	<body>	
	<header>
		<h1><a href="accueil.php?$vor=0">Les Services Internes à Fruidor</a></h1>
	</header>

	
	<?php include("barnav.php"); ?>

</br>

	<?php
	$vor=0;
	$var=$_GET['$vor'];

	switch ($var) {
		case '1':
			include("musa.php");
			break;

		case '2':
			include("cavendish.php");
			break;

		case '3':
			include("poyo.php");
			break;
		
		case '4':
			include ("exotique.php");
			break;

		case '5':
			include ("figue.php");
			break;

		case '6':
			include ("rose.php");
			break;

		case '7':
			include ("pisang.php");
			break;

		case '8':
			include ("mysore.php");
			break;

		case '0':
			include ("presentation.php");
			break;

		default:
			include ("presentation.php");
	} ?>


	<a href="maquette1.php">NewsLetter</a>
	</body>

</html>