<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="VectorLover.css"/>
		<title>Inscription</title>
	</head>
	<body>
	<header>
		<img src="Bandeau/iStock_000022099457Medium_300.jpg" width="99%" height="20%"/>
	</header>
		<h1>Formulaire d'inscription</h1></br>
		<p>Veuillez remplir le formulaire suivant :</p>
		<form action="inscription.php" method="POST" ENCTYPE="multipart/form-data">
			Pseudo :<input type="text" size="15" name="pseudo"/><br/><br/>
			Mot de passe :<input type="password" size="10" name="pass"/><br/><br/>
			Confirmation :<input type="password" size="10" name="pass2"/><br/><br/>
			<input type="hidden" name="MAX_FILE_SIZE" value="100000">
			Avatar :<INPUT type=file name="avatar"><h5>Taille limitee a 100 Ko</h5><br/><br/><br/>
			<input class="button"type="submit" value="S'inscrire"><input class="button"type="reset" value="Effacer"><br/><br/>
		</form> 
	<p>
	© All your copyright info here       Design by 
	<a href="http://www.styleshout.com/"> styleshout </a>
	<a href="index.php"> | Acceuil | </a>
	</p>
	</body>
</html>