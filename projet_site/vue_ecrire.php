<html>
<head>
    <meta charset="utf-8" />
    <title>Nouvel Article</title>
    <link rel="stylesheet" href="VectorLover.css"/> 
</head>
<body>
	<header>
		<img src="Bandeau/iStock_000022099457Medium_300.jpg" width="99%" height="20%"/>
	</header>
<?php $titre = "Site d'informations "; ?>

<h1 align="center">Ecrire un article</h1>
<p>Article :</p>
<?php
if (isset ($_SESSION['pseudo']) AND $_SESSION['pseudo']!=""){	
	Echo ' (connecte en tant que '.$_SESSION['pseudo'].')<br/><br/>';
	}
?>
<form action="ecrire.php" method="POST">
	Categorie :<SELECT name="categorie" size="1">
	<OPTION>theme 1
	<OPTION>theme 2
	<OPTION>theme 3
	<OPTION>theme 4
	<OPTION>theme 5
	</SELECT><br/><br/>
	Titre :<input type="text" size="50" name="titre"/><br/><br/>
	<textarea rows=40 cols=120 name="article"></textarea><br/><br/>
	Source :<input type="text" size="50" name="source"/><br/><br/>
	Image:<INPUT type=file name="image"><br/><br/>
	<input type="submit" value="Envoyer">
	<input type="reset" value="Annuler"><br/>
</form> 
<a href='index.php'>Retour à la page d'accueil</a></p>
<br/>
<br/><br/>
</body>
</html>