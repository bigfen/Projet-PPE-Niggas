<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8"/>
	<title>Inscription à la newsletter</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<form  method="POST" enctype="multipart/form-data" action = "validation.php"> // ICI
	<div>
		<span>Nom:</span><br/>
		<input type="text" name="nom"/>
	</div>

	<div>
		<span>Prénom:</span><br/>
		<input type="text" name="prenom"/>
	</div>

	<div>
		<span>Adresse E-Mail:</span><br/>
		<input type="text" name="email"/>
	</div>

	<div>
		<input type="submit" value="Valider" /> <input type="reset" value="Remise à Zéro" />
	</div>

</form>


</body>
</html>