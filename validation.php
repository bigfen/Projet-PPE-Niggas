<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8"/>
	<title>Inscription à la newsletter</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>


<?php 
	echo ='33';
	$idconn= mysql_connect("bddname","username","password"); // ICI
	mysql_select_db($idconn,database_name); // ICI
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email=$_POST['email'];

	if ((empty($_POST['email']) or empty($_POST['nom']) or empty($_POST['prenom'])))
	{
		print "Les informations n'ont pas été spécifiées correctement, veuillez recommencer.";
		print "<a href="maquete1.php" >Retour</a>" // ICI
	
		else
		{
			// Insertion des données dans la base de données - Table Client.
			$query = query('select xxx from xxx'); // ICI
			$query .= query('insert into xxx'); // ICI

			// Envoi du mail de newsletter

			$message ="Félicitations, vous vous êtes bien inscrit à la newsletter de Fruidor. \r\n\r\n"; 
			$message .="Vous recevrez de manière mensuelle les dernières informations de notre société.";
			$subject ="Inscription à la newsletter - Fruidor";
			$headers = "from:no-reply@fruidor.com";
			if mail($email, $subject, $message, $headers)
			{
				print("L'inscription a bien été prise en compte.");
			
				else
				{
					print("Il y a eu une erreur lors de l'inscription, veuillez recommencer.");
					print "<a href="maquete1.php" >Retour</a>"
				}
			}
		}
	}
?>

</body>
</html>