<html>
<?php session_start(); ?>
<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <link rel="stylesheet" href="VectorLover.css"/> 
</head>
<body>
<?php $titre = "Site d'informations "; ?>

<?php ob_start(); ?>
<h1 align="center">Connexion</h1>
	<p>Veuillez remplir le formulaire suivant :</p>
		<form action="connexion.php" method="POST">
			Pseudo :<input type="text" size="15" name="pseudo"/><br/><br/>
			Mot de passe :<input type="password" size="10" name="pass"/><br/><br/>
			<input class="button" type="submit" value="Se connecter"><input class="button" type="reset" value="Effacer"><br/><br/>
		</form> 
	<p>
	© All your copyright info here       Design by 
	<a href="http://www.styleshout.com/"> styleshout </a>
	<a href="index.php"> | Acceuil | </a>
	</p>
	<br/><br/>
</body>
</html>